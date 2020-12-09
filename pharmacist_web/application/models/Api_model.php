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
    public function get_exn()
    {

        $curl = curl_init();
        $url = getenv('EMR_API_URL') . "/api/dispenses";

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer x]vf4yp0yf"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return $response;
    }

    public function get_emr_id($hn, $emr)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => getenv('EMR_API_URL') . "/api/" . $hn . "/emr/" . $emr,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer x]vf4yp0yf"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return $response;
    }

    public function post_dis()
    {

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
            CURLOPT_URL => getenv('EMR_API_URL') . "/api/" . $hn . "/dispense/" . $emr,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($param),
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer x]vf4yp0yf",
                "content-type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        //        $this->session->set_userdata(array('savedata' => 1));
        setcookie("savedata", 1, time() - 3600, '/');
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
