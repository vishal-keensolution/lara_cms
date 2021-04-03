<?php 

//----------------------Session And Role Check  Permission check

function session_n_role_chk(){
    
}

function check ($module, $id) {
    return in_array($id, $_SESSION['user']['permissions'][$module]);
  }