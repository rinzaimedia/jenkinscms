<?php

class Login_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

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

        $query = $this -> db -> query("select * from users where username = '".$data['username']."' and password = '".self::Salted($data['password'], $data['username'])."' and status = '1'");

            $results = $query->result_array();
            foreach($query->result_array() as $result){
                $this->session->set_userdata('username', $result);
                if($result['username'] != '')
                {

                    $this->session->set_userdata('authorized', 'yes');
                    $this->session->set_userdata('name', $result['firstname']. " " .$result['lastname']);
                    $this->session->set_userdata('userlevel', $result['userlevel']);

                    return "Successfully Logged In";
                }

                else{
                    return "Login Failed ... Try Again";
                }
            }


    }

    private function Salted($password, $username){

        $this->load->library('session');

        $query = $this->db->query("select password from users where username = '".$username."'");

        $results = $query->result_array();

        $this->session->set_userdata('userarray', $results);

        foreach($query->result_array() as $result){

            $getpass = $result['password'];

            $hashed_password = crypt($password);

            if($getpass == '' || $getpass == NULL){

                $pass = crypt($password);

                $this->db->query("update users set password = '".$pass."' where username = '".$username."'");

                return $pass;

            }

            elseif($result->password == crypt($password)){

                return $getpass;

            }

            else{

                return false;

            }

        }

    }

    public function logout(){

        $this->load->library('session');

        $this->session->unset_userdata('authorized');


        return true;
    }



}
