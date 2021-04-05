<?php 

//----------------------Session And Role Check  Permission check

function session_n_role_chk(){
    if(!session()->has('user')){
        
    //    return redirect('/admin/Login')->with('completed', 'Access Denied') ;
    echo redirect('/admin/login')->with('completed', 'Access Denied');
    exit;
    }else{        
        $value['in'] =  TRUE;
        $value['user'] =  session()->get('user');
        $value['admin'] = session()->get('admin');
        $value['access'] = session()->get('access');
        return $value;
    }
}

function session_n_role_chk_rev(){
    if(session()->has('user')){
        
    // return redirect('/admin/Login')->with('completed', 'Access Denied') ;
        echo redirect('/admin/');
        exit;
    }
}
function check ($module, $id) {
    return in_array($id, $_SESSION['user']['permissions'][$module]);
  }