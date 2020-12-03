<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

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
    public function get_exn() {

        $data = $this->Api_model->get_exn();
        
        echo json_encode($data);
    }
    
    public function post_dis() {
        $data = $this->Api_model->post_dis();
        
        echo json_encode($data);
    }
    

}
