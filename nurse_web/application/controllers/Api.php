<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{

    public function __construct()
    {
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
    public function test()
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => getenv('EMR_API_URL') . "/EMRs/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer x]vf4yp0yf",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        echo $response;
    }

    public function post_admit()
    {
        //        echo json_encode($_POST);
        //        exit();
        $_select = array('*');
        $arr_where = array('id' => 1);
        $config = $this->Main_model->rowdata(TBL_CONFIG, $arr_where, $_select);

        $hn = $_POST[hn];
        $emr = $config->s_value;
        $curl = curl_init();

        $url = getenv('EMR_API_URL') . "/api/" . $hn . "/admit/" . $emr;
        //        $_POST[datetime] = date('Y-m-d H:i:s');
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($_POST),
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer x]vf4yp0yf",
                "content-type: application/json",
            ),
        ));
        //
        $response = curl_exec($curl);
        $err = curl_error($curl);
        //
        curl_close($curl);

        $data[s_value] = intval($emr) + 1;
        $data[result] = $this->db->update(TBL_CONFIG, $data, array('id' => 1));

        $return[update] = $data;
        $return[url] = $url;
        $return[res] = $response;

        //        $this->session->set_userdata(array('savedata' => 1));
        setcookie("savedata", 1, time() + 3600, '/');
        echo json_encode($return);
        //        echo json_encode($_POST);
    }

    public function get_admit()
    {
    }

    public function post_treat()
    {
        $data = $this->Api_model->post_treat();
        echo $data;
    }
}
