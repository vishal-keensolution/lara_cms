<?php 

//----------------------Session And Role Check  Permission check

function session_n_role_chk(){
    
    if(session()->has('user')){
        $value['user'] =  session()->get('user');
        $value['admin'] = session()->get('admin');
        $value['access'] = session()->get('access');
        //die("value hai");
        return $value;
    }else{
        return redirect('/admin/Login')->with('completed', 'Access Denied') ;
    }
}

function check ($module, $id) {
    return in_array($id, $_SESSION['user']['permissions'][$module]);
  }