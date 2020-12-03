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
    public function get_his($hn) {

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_PORT => "3001",
            CURLOPT_URL => "http://localhost:3001/api/" . $hn . "/history",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer x]vf4yp0yf",
                "cache-control: no-cache",
                "postman-token: a5104ee1-66f2-6985-2b7e-f1d258adcf37"
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

    /*
     * 
     * 	Function
     * 
     * @return
     */
}
