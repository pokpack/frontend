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
    public function get_exn() {

        $curl = curl_init();
        $url = "http://localhost:3001/api/dispenses";

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
                "postman-token: a4ce0a83-4ebc-409e-82df-e9f1032dda82"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return $response;
    }

    public function get_emr_id($hn, $emr) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_PORT => "3001",
            CURLOPT_URL => "http://localhost:3001/api/" . $hn . "/emr/" . $emr,
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

    public function post_dis() {
        
        $drug = array();
        foreach ($_POST[drug][id] as $key => $val) {
            
            $drug[$key][id] = $val;
            $drug[$key][num] = $_POST[drug][num][$key];
        }
        
        $param[drug] = $drug;
        $param[doctor_record] = $_POST[doctor_record];
        $param[nurse_record] = $_POST[nurse_record];
        $param[pharmacist_record] = $_POST[pharmacist_record];
        
        $curl = curl_init();
        $hn = $_POST[hn];
        $emr = $_POST[emr];
        curl_setopt_array($curl, array(
            CURLOPT_PORT => "3001",
            CURLOPT_URL => "http://localhost:3001/api/".$hn."/dispense/".$emr,
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
                "postman-token: bbf9c0b9-0a4a-905c-e5e4-2f2e98ec5bb2"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        $this->session->set_userdata(array('savedata' => 1));
        $data[param] = $param;
        $data[res] = $response;
        
        return $data;
    }

    /*
     * 
     * 	Function
     * 
     * @return
     */
}
