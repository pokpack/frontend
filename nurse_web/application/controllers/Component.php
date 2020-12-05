<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Component extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('pagination');
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
        
    }

    public function cpn_patient() {

        $_select = array('*');
        $arr_where = array('id' => $_POST[id]);
        $data[data] = $this->Main_model->rowdata(TBL_PATIEN, $arr_where, $_select);
        $this->load->view('component/patient',$data);
    }

}
