<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class UserAuth extends Controller
{
    //
    function userLogin(Request $req){
        $data = $req->input('email');
        $req->session()->put('user',$data);
        //echo  session('user');
        return redirect('/admin');
    }
}
