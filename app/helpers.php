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
//------------------------------------------------   
function utf8_uri_encode( $utf8_string, $length = 0 ) {
    $unicode = '';
    $values = array();
    $num_octets = 1;
    $unicode_length = 0;

    $string_length = strlen( $utf8_string );
    for ($i = 0; $i < $string_length; $i++ ) {

        $value = ord( $utf8_string[ $i ] );

        if ( $value < 128 ) {
            if ( $length && ( $unicode_length >= $length ) )
                break;
            $unicode .= chr($value);
            $unicode_length++;
        } else {
            if ( count( $values ) == 0 ) $num_octets = ( $value < 224 ) ? 2 : 3;

            $values[] = $value;

            if ( $length && ( $unicode_length + ($num_octets * 3) ) > $length )
                break;
            if ( count( $values ) == $num_octets ) {
                if ($num_octets == 3) {
                    $unicode .= '%' . dechex($values[0]) . '%' . dechex($values[1]) . '%' . dechex($values[2]);
                    $unicode_length += 9;
                } else {
                    $unicode .= '%' . dechex($values[0]) . '%' . dechex($values[1]);
                    $unicode_length += 6;
                }

                $values = array();
                $num_octets = 1;
            }
        }
    }

    return $unicode;
}

 
function seems_utf8($str) {
    $length = strlen($str);
    for ($i=0; $i < $length; $i++) {
        $c = ord($str[$i]);
        if ($c < 0x80) $n = 0; # 0bbbbbbb
        elseif (($c & 0xE0) == 0xC0) $n=1; # 110bbbbb
        elseif (($c & 0xF0) == 0xE0) $n=2; # 1110bbbb
        elseif (($c & 0xF8) == 0xF0) $n=3; # 11110bbb
        elseif (($c & 0xFC) == 0xF8) $n=4; # 111110bb
        elseif (($c & 0xFE) == 0xFC) $n=5; # 1111110b
        else return false; # Does not match any model
        for ($j=0; $j<$n; $j++) { # n bytes matching 10bbbbbb follow ?
            if ((++$i == $length) || ((ord($str[$i]) & 0xC0) != 0x80))
                return false;
        }
    }
    return true;
}

//function sanitize_title_with_dashes 
function sanitize($title) {
    $title = strip_tags($title);
    // Preserve escaped octets.
    $title = preg_replace('|%([a-fA-F0-9][a-fA-F0-9])|', '---$1---', $title);
    // Remove percent signs that are not part of an octet.
    $title = str_replace('%', '', $title);
    // Restore octets.
    $title = preg_replace('|---([a-fA-F0-9][a-fA-F0-9])---|', '%$1', $title);

    if (seems_utf8($title)) {
        if (function_exists('mb_strtolower')) {
            $title = mb_strtolower($title, 'UTF-8');
        }
        $title = utf8_uri_encode($title, 200);
    }

    $title = strtolower($title);
    $title = preg_replace('/&.+?;/', '', $title); // kill entities
    $title = str_replace('.', '-', $title);
    $title = preg_replace('/[^%a-z0-9 _-]/', '', $title);
    $title = preg_replace('/\s+/', '-', $title);
    $title = preg_replace('|-+|', '-', $title);
    $title = trim($title, '-');

    return $title;
}
//-------------------------All Dropdowns----------------------------
    use App\Models\Category;
    use App\Models\Role; 
    use App\Models\MenuAccess;

function category_dropdown($mode="ADD",$select=array(),$cat_type="pages"){
    $C['all']  = category::where('cat_for_component',"=",$cat_type)->get(); 
    $C['select']  = $select;
    return $C;
}

function role_dropdown($mode="ADD",$select=array()){
    $R['all']  = Role::all(); 
    //print_r($R['all']); die;
    $R['select']  = $select;
    return $R;
}
function menu_dropdown($mode="ADD",$select=array()){
    $M['all']  = MenuAccess::all(); 
    //print_r($R['all']); die;
    $M['select']  = $select;
    return $M;
}
