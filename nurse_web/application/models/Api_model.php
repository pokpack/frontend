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
            CURLOPT_PORT => "3001",
            CURLOPT_URL => "http://localhost:3001/api/admits",
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
    
    public function get_dispenses() {

        $curl = curl_init();
        $url = "http://localhost:3001/api/treats";
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
    
    public function get_history() {

        $curl = curl_init();
        $url = "http://localhost:3001/api/1/history";
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

    /*
     * 
     * 	Function
     * 
     * @return
     */
}
