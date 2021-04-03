<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Session;
use Illuminate\Support\Facades\Hash;



class UserAuth extends Controller
{


    public function home()
    {
        if (!Session::get('admin')) {
            return redirect()->route('login');
        }
        return view('admin.dashboard');
    }
        public function login()
    {
        if (Session::get('admin')) {
            return redirect()->route('admin');
        }
        return view('admin.login');
    }

    public function check(Request $request)
    {
        // LARAVEL VALIDATION
        $validation = [
            'email' => 'required',
            'password' => 'required'
        ];
        
        $this->validate($request, $validation);
            $adm=[];
        // GET THE DATA
        $admin = User::select(
            'tbl_user.id',
            'tbl_user.name',
            'tbl_user.email',
            'tbl_user.delete',
            'tbl_user.status',
        )
            ->where([
                'email' =>$request->input('email'),
            ])
            ->first()->get(); 
            if (count($admin) > 0) {
                foreach ($admin as $a) {
                    $obj = new \stdClass();
                    $obj->id = $a->id;
                    $obj->name = $a->name;   
                    $obj->email = $a->email;   
                    $obj->delete = $a->delete;   
                    $obj->status = $a->status;   
                    $adm[] = $obj;
                }
            }
            if ($admin && Hash::check($request->input('password'), $admin->first()->password)) {
                if ($admin->first()->status != 1 && $admin->first()->delete != 1) {
                    return back()
                        ->withInput()
                        ->with('error', 'Login failed! Because your account has been disabled!');
                }
                // SUCCESS LOGIN
    
                // GET USER'S ACCESS
                $access = [];
                $get_access = User::select(
                    'tbl_role_user.roleid as rid', 
                    'tbl_role.name as rname'
                )
                ->join('tbl_role_user', 'tbl_role_user.userid','=', 'tbl_user.id')
                ->join('tbl_role', 'tbl_role.id', '=','tbl_role_user.roleid' )
                    ->where('tbl_user.id', $admin->first()->id)
                    ->get();
                if (count($get_access) > 0) {
                    foreach ($get_access as $item) {
                        $obj = new \stdClass();
                        $obj->roleid = $item->rid;
                        $obj->rolename = $item->rname;   
                        $access[] = $obj;
                    }
                }
    
                // SET REDIRECT URI FROM SESSION (IF ANY)
                $redirect_uri = '/admin';
                if (Session::has('redirect_uri')) {
                    $redirect_uri = Session::get('redirect_uri');
                }
                $request->session()->put('user',$adm);
                $request->session()->put('admin',$adm);
                $request->session()->put('access',$access);

                // print_r(session('admin'));
                // print_r(session('access')); 
                // die('here');
                return redirect($redirect_uri);
              }
     // Fetch all records
        // CHECK IS DATA EXIST
        
        // FAILED
        return back()
            ->withInput()
            ->with('error', 'Username or Password is wrong!');
    }

    public function logout()
    {
        $session = Session::get('admin');

        Session::flush();
        return redirect('admin/login')
            ->with('success', 'Logout successfully');
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
            $user = User::find($session->id);
            $user->force_logout = 1;
            $user->save();
        }

        Session::flush();
        return redirect()
            ->route('admin.login')
            ->with('success', $message);
    }

}
