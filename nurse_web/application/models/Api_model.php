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
                "content-type: application/json",
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
    //                "content-type: application/json",
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
