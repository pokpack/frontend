<?php

class Api_model extends CI_Model
{

    //public $name;
    //public $description;

    public function __construct()
    {
        parent::__construct();
    }

    /*
     * 
     * 	Function Main use multi pages
     * 
     * @return
     */

    // ==============================================================================================
    public function get_admit()
    {


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => getenv('EMR_API_URL') . "/api/cures",
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

    public function get_dispenses()
    {

        $curl = curl_init();
        $url = getenv('EMR_API_URL') . "/api/diagnoses";
        curl_setopt_array($curl, array(
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

    public function get_history()
    {

        $curl = curl_init();
        $url = getenv('EMR_API_URL') . "/api/diagnoseds";
        curl_setopt_array($curl, array(
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

    public function post_treat()
    {

        $curl = curl_init();
        $hn = $_POST[hn];
        $emr = $_POST[emr];
        $url = getenv('EMR_API_URL') . "/api/" . $hn . "/diagnose/" . $emr;
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
                "cache-control: no-cache",
                "content-type: application/json",
                "postman-token: 0d333b9f-13cc-f25c-82ef-a37628a808e7"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        //        $this->session->set_userdata(array('savedata' => 1));
        setcookie("savedata", 1, time() + 3600, '/');
        return $response;
    }

    public function get_data_emr($param)
    {
        $curl = curl_init();

        $hn = $_POST[hn];
        $emr = $_POST[emr];
        $url = getenv('EMR_API_URL') . "/api/" . $hn . "/emr/" . $emr;
        curl_setopt_array($curl, array(
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
                "postman-token: 128498c4-5746-e59e-c978-9121af266192"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        return $response;
    }

    //    public function post_treat() {
    //
    //        $curl = curl_init();
    //        $hn = $_POST[hn];
    //        $emr = $_POST[emr];
    //        $url = getenv('EMR_API_URL') . "/api/" . $hn . "/diagnose/" . $emr;
    //        curl_setopt_array($curl, array(
    //            CURLOPT_URL => $url,
    //            CURLOPT_RETURNTRANSFER => true,
    //            CURLOPT_ENCODING => "",
    //            CURLOPT_MAXREDIRS => 10,
    //            CURLOPT_TIMEOUT => 30,
    //            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //            CURLOPT_CUSTOMREQUEST => "POST",
    //            CURLOPT_POSTFIELDS => json_encode($_POST),
    //            CURLOPT_HTTPHEADER => array(
    //                "authorization: Bearer x]vf4yp0yf",
    //                "cache-control: no-cache",
    //                "content-type: application/json",
    //                "postman-token: 0d333b9f-13cc-f25c-82ef-a37628a808e7"
    //            ),
    //        ));
    //
    //        $response = curl_exec($curl);
    //        $err = curl_error($curl);
    //
    //        curl_close($curl);
    //        $this->session->set_userdata(array('savedata' => 1));
    //        return $response;
    //    }

    /*
     * 
     * 	Function
     * 
     * @return
     */
}
