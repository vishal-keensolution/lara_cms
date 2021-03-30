<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Session;
use Illuminate\Support\Facades\Hash;



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

    public function check(Request $request)
    {
        // LARAVEL VALIDATION
        $validation = [
            'email' => 'required',
            'password' => 'required'
        ];
        
        $this->validate($request, $validation);

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
                    'tbl_role_user.role_id', 
                    'tbl_role.name as rname'
                )
                ->join('tbl_role_user', 'tbl_role_user.user_id', 'tbl_user.id')
                ->join('tbl_role_user', 'tbl_role_user.role_id', 'tbl_role.id')
                    ->where('tbl_user.id', $admin->first()->id)
                    ->get();
                if (count($get_access) > 0) {
                    foreach ($get_access as $item) {
                        $obj = new \stdClass();
                        $obj->role_id = $item->role_id;
                        $obj->role_name = $item->role_name;   
                        $access[] = $obj;
                    }
                }
    
                // SET REDIRECT URI FROM SESSION (IF ANY)
                $redirect_uri = route('admin');
                if (Session::has('redirect_uri')) {
                    $redirect_uri = Session::get('redirect_uri');
                }
    
                return redirect($redirect_uri)
                    ->with(Session::put('admin', $admin))
                    ->with(Session::put('access', $access))
                    ->with(Session::put('auth', Helper::generate_token($password)));
              }
     // Fetch all records
     $response['data'] = $admin;

            print_r(response()->json($response)); die;
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
        return redirect()
            ->route('admin.login')
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
