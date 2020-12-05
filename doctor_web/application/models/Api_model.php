<?php

class Api_model extends CI_Model {

    //public $name;
    //public $description;

    public function __construct() {
        parent::__construct();
    }

    /*
     * 
     * 	Function Main use multi pages
     * 
     * @return
     */

    // ==============================================================================================
    public function get_admit() {


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_PORT => "3002",
            CURLOPT_URL => "http://localhost:3002/api/cures",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer x]vf4yp0yf",
                "cache-control: no-cache",
                "postman-token: c98378f1-0492-9021-6b11-80dde35d13a3"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return $response;
    }

    public function get_admit_id($hn, $emr) {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_PORT => "3001",
            CURLOPT_URL => "http://localhost:3002/api/" . $hn . "/emr/" . $emr,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer x]vf4yp0yf",
                "cache-control: no-cache",
                "postman-token: bd02a435-f29a-13b3-09a1-c21e4e6db4f4"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return $response;
    }

    public function post_exn() {

        $drug = array();
        foreach ($_POST[drug][id] as $key => $val) {

            $drug[$key][id] = $val;
            $drug[$key][num] = $_POST[drug][num][$key];
        }

        $param[drug] = $drug;
        $param[treat] = $_POST[treat];
        $param[doctor_record] = $_POST[doctor_record];
        $param[nurse_record] = $_POST[nurse_record];

        $curl = curl_init();

        $hn = $_POST[hn];
        $emr = $_POST[emr];
        $url = "http://localhost:3002/api/" . $hn . "/cure/" . $emr;
        curl_setopt_array($curl, array(
            CURLOPT_PORT => "3001",
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($param),
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer x]vf4yp0yf",
                "cache-control: no-cache",
                "content-type: application/json",
                "postman-token: ca2cc671-de41-4e54-6c85-e95e1798df28"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $return[post] = $param;
        $return[res] = $response;
//        $this->session->set_userdata(array('savedata' => 1));
        setcookie("savedata", 1, time() - 3600, '/');
        return $return;
    }

    public function get_dispenses() {

        $curl = curl_init();
        $url = "http://localhost:3002/api/diagnoses";
        curl_setopt_array($curl, array(
            CURLOPT_PORT => "3001",
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer x]vf4yp0yf",
                "cache-control: no-cache",
                "postman-token: 66c0b6b1-33a2-9031-1d8e-60de63851b36"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return $response;
    }

    public function post_treat() {

        $curl = curl_init();
        $hn = $_POST[hn];
        $emr = $_POST[emr];
        $url = "http://localhost:3002/api/".$hn."/diagnose/".$emr;
        curl_setopt_array($curl, array(
            CURLOPT_PORT => "3001",
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
                "cache-control: no-cache",
                "content-type: application/json",
                "postman-token: 0d333b9f-13cc-f25c-82ef-a37628a808e7"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
//        $this->session->set_userdata(array('savedata' => 1));
        setcookie("savedata", 1, time() - 3600, '/');
        return $response;
    }

    /*
     * 
     * 	Function
     * 
     * @return
     */
}
