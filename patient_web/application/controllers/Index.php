<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('Api_model');
        $this->load->model('Main_model');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {

//        echo 123;
//        exit();
//        $this->load->view('template/test');

        $_where = array('id' => $this->session->userdata('user_id'));
        $_select = array('i_hn');
//                                                        
        $user = $this->Main_model->rowdata(TBL_PATIEN, $_where, $_select);

        $res = $this->Api_model->get_his($user->i_hn);
        $data[data] = json_decode($res);

        $this->load->view('template/header');
        $this->load->view('index', $data);
        $this->load->view('template/footer');
    }
    
    public function history() {
        
        $res = $this->Api_model->get_emr_id($_POST[hn], $_POST[emr]);
        $data[data] = json_decode($res);
        $this->load->view('history', $data);
    }

}
