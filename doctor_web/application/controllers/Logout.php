<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //		$this->load->model('Login_model');
    }

    /*
     * @ Login main
     */

    public function index()
    {
        //		$this->session->unset_userdata(array('doctor_user_id','username'));
        setcookie("doctor_user_id", "", time() - 3600, '/');
        setcookie("username", "", time() - 3600, '/');
        redirect('login', 'refresh');
    }

    /**
     * @ 
     */
}
