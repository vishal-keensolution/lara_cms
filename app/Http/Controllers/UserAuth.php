<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class UserAuth extends Controller
{
    //
    public function login()
    {
        if (Session::get('admin')) {
            return redirect()->route('admin');
        }
        return view('admin.login');
    }

    public function do_login(Request $request)
    {
        // LARAVEL VALIDATION
        $validation = [
            'email' => 'required',
            'password' => 'required'
        ];
        
        $this->validate($request, $validation);
        $password = Hash::make($request->input('password'));

        // GET THE DATA
        $admin = User::select(
            'tbl_user.id',
            'tbl_user.name',
            'tbl_user.email',
        )
            ->where([
                'email' =>$request->input('email'),
                'password' => $password
            ])
            ->first();

        // CHECK IS DATA EXIST
        if ($admin) {
            if ($admin->status != 1) {
                return back()
                    ->withInput()
                    ->with('error', lang('Login failed! Because your account has been disabled!', $this->translation));
            }

            // UPDATE "FORCE LOGOUT" STATUS
            if ($admin->force_logout) {
                $admin->force_logout = 0;
                $admin->save();
            }

            // SUCCESS LOGIN
            // LOGGING
            $log = new SysLog();
            $log->subject = $admin->id;
            $log->action = 1;
            $log->save();

            // GET USER'S ACCESS
            $access = [];
            $get_access = SysGroupRule::select(
                'sys_group_rule.rule_id',
                'sys_rules.name as rule_name',
                'sys_rules.description as rule_desc',
                'sys_modules.name as module_name'
            )
                ->leftJoin('sys_rules', 'sys_rules.id', 'sys_group_rule.rule_id')
                ->leftJoin('sys_modules', 'sys_rules.module_id', 'sys_modules.id')
                ->where('sys_group_rule.group_id', $admin->group_id)
                ->where('sys_modules.status', 1)
                ->get();
            if (count($get_access) > 0) {
                foreach ($get_access as $item) {
                    $obj = new \stdClass();
                    $obj->rule_id = $item->rule_id;
                    $obj->rule_name = $item->rule_name;
                    $obj->rule_desc = $item->rule_desc;
                    $obj->module_name = $item->module_name;
                    $access[] = $obj;
                }
            }

            // GET USER'S ACCESS DIVISIONS & BRANCHES
            $division_allowed = [];
            $branch_allowed = [];
            $get_branch_allowed = SysGroupBranch::select(
                'sys_branches.*',
                'sys_divisions.name as division_name',
                'sys_divisions.id as division_id'
            )
                ->leftJoin('sys_branches', 'sys_group_branch.branch', '=', 'sys_branches.id')
                ->leftJoin('sys_divisions', 'sys_branches.division_id', '=', 'sys_divisions.id')
                ->whereNull('sys_branches.deleted_at')
                ->where('sys_group_branch.group', $admin->group_id)
                ->orderBy('sys_divisions.name')
                ->orderBy('sys_branches.name')
                ->get();
            if (count($get_branch_allowed) > 0) {
                foreach ($get_branch_allowed as $item) {
                    $obj = new \stdClass();
                    $obj->branch_id = $item->id;
                    $obj->branch = $item->name;
                    $obj->division_id = $item->division_id;
                    $obj->division = $item->division_name;
                    $branch_allowed[] = $obj;

                    if (!in_array($item->division_name, $division_allowed)) {
                        $division_allowed[] = $item->division_name;
                    }
                }
            }

            // SET REDIRECT URI FROM SESSION (IF ANY)
            $redirect_uri = route('admin.home');
            if (Session::has('redirect_uri')) {
                $redirect_uri = Session::get('redirect_uri');
            }

            return redirect($redirect_uri)
                ->with(Session::put('admin', $admin))
                ->with(Session::put('access', $access))
                ->with(Session::put('branch', $branch_allowed))
                ->with(Session::put('division', $division_allowed))
                ->with(Session::put('auth', Helper::generate_token($password)));
        }

        // FAILED
        return back()
            ->withInput()
            ->with('error', lang('Username or Password is wrong!', $this->translation));
    }

    public function logout()
    {
        $session = Session::get('admin');
        if (isset($session)) {
            // LOGGING
            $log = new SysLog();
            $log->subject = $session->id;
            $log->action = 2;
            $log->save();
        }

        Session::flush();
        return redirect()
            ->route('admin.login')
            ->with('success', lang('Logout successfully', $this->translation));
    }

    public function logout_all()
    {
        $message = 'Logout successfully';

        $session = Session::get('admin');
        if (isset($session)) {
            // LOGGING
            $log = new SysLog();
            $log->subject = $session->id;
            $log->action = 2;
            $log->save();

            $message = 'Logout from all sessions successfully';
            $user = SysUser::find($session->id);
            $user->force_logout = 1;
            $user->save();
        }

        Session::flush();
        return redirect()
            ->route('admin.login')
            ->with('success', lang($message, $this->translation));
    }

}
