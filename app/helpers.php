<?php 

//----------------------Session And Role Check  Permission check

function session_n_role_chk(){
    $value['user'] = session()->get('user');
    $value['admin'] = session()->get('admin');
    $value['access'] = session()->get('access');
    return $value;
}

function check ($module, $id) {
    return in_array($id, $_SESSION['user']['permissions'][$module]);
  }