<?php

function is_logged_in(){
    $ci = get_instance();

    if(!$ci->session->userdata('username')){
        redirect('programmer/auth');
    }else{
        $role = $ci->session->userdata('role');
        $menu = $ci->uri->segment(1);
        
        $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id_menu'];
        
        $userAccess = $ci->db->get_where('user_access_menu', [
            'role'      => $role,
            'menu_id'   => $menu_id
        ]);
        
        if($userAccess->num_rows() < 1){
            redirect('programmer/auth/blocked');
        }
    }
}