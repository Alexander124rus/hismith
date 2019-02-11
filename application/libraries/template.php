<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Template {
   
	//Шаблон
    function admin_view($data,$name)
    {
        $CI =& get_instance();
        
        $CI->load->view('admin/blocks/header_view',$data);
        $CI->load->view('admin/blocks/menu_view');
        $CI->load->view('admin/'.$name.'_view',$data);
        $CI->load->view('admin/blocks/footer_view',$data);
    }

}

?>