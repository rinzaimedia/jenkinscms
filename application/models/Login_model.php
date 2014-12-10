<?php

class Login_model extends CI_Model{

    public function checkLogin($data = false)
    {


        /*$url = "http://soap.findoursearch.com/federline.php";
        $sPostfields ="<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>\r\n"
            ."<s:Envelope s:encodingStyle=\"http://schemas.xmlsoap.org/soap/encoding/\" xmlns:s=\"http://schemas.xmlsoap.org/soap/envelope/\">\r\n"
            ."<s:Body>\r\n"
            ."<u:ForceTermination xmlns:u=\"urn:schemas-upnp-org:service:WANIPConnection:1\" />\r\n"
            ."</s:Body>\r\n"
            ."</s:Envelope>\r\n";
        $soap_do = curl_init();

        $header = array(
            "Content-Type: text/xml",
            "Cache-Control: no-cache",
            "Pragma: no-cache",
            "SOAPAction: \"urn:schemas-upnp-org:service:WANIPConnection:1#ForceTermination\"",
            "Content-length: ".strlen($sPostfields),
        );

        curl_setopt($soap_do, CURLOPT_URL,            $url );
        curl_setopt($soap_do, CURLOPT_RETURNTRANSFER, true );
        curl_setopt($soap_do, CURLOPT_POST,           true );
        curl_setopt($soap_do, CURLOPT_POSTFIELDS,     $sPostfields);
        curl_setopt($soap_do, CURLOPT_HTTPHEADER,     $header );

        $output = curl_exec($soap_do);
        $aInfo = curl_getinfo($soap_do);
        curl_close($soap_do);

        print_r ($output);*/



    }

    public function login($data){

        $this -> db -> simple_query("select * from users where username = '".$data['username']."' and password = '".self::Salted($data['password']."'"));

    }

    private function Salted($data){

        $this->load->library('session');

        $query = $this -> db -> query("select password from users where username = '".$data['username']."'");

        $results = $query->result_array();

        $getpass = $results['password'];

        $hashed_password = crypt($data['password']);

        if($getpass == '' || $getpass == null){

            $pass = crypt($data['password']);

            $this->db->simple_query("update users set password = '".$pass."' where username = '".$data['username']."'");


            return $pass;

        }

        elseif(hash_equals($results['password'], crypt($data['password'], $hashed_password))){

            $this->session->set_userdata('authorized', 'yes');


            return $getpass;
        }

        else{

            return '';

        }



    }

}