<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Loadpost {

    public function __construct() {
        $this->CI = & get_instance();
    }

//    public function check_login() {
//
//        if ($_COOKIE[SESS_ID] == NULL) {
//            if ($this->CI->session->userdata('user_id') == NULL) {
//                $class = $this->CI->router->fetch_class();
//                if ($class != 'login') {
//                    if ($class != 'lang' && $class != 'api') {
//                        redirect('login', 'refresh');
////                        exit();
//                    }
//                }
//            } else {
//                
//            }
//        }
//    }
    
    public function check_login() {
        $ci =& get_instance();
        $ci->load->helper('cookie');
        $user = $ci->input->cookie('nurse_user_id');
//        if ($_COOKIE[SESS_ID] == NULL) {
            if ($user == NULL or $user == "") {
                $class = $this->CI->router->fetch_class();
                if ($class != 'login') {
                    if ($class != 'lang' && $class != 'api') {
                        redirect('login', 'refresh');
//                        exit();
                    }
                }
            } else {
//                echo $user." ++";
//                exit();
            }
//        }
    }

}
