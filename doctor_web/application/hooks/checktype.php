<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Checktype {

    public function __construct() {
        $this->CI = & get_instance();
    }

    public function check_type_user() {
        $ci = & get_instance();
        $ci->load->helper('cookie');
        $type = $ci->input->cookie('type_user');

        if ($type != 3) {
            $class = $this->CI->router->fetch_class();
            if ($class != 'login') {
                if ($class != 'lang' && $class != 'api') {
                    redirect('login', 'refresh');
//                        exit();
                }
            }
        }
    }

}
