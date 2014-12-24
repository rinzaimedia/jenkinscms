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

        $this->load->library('session');

        $query = $this -> db -> query("select * from users where username = '".strtolower($data['username'])."' and password = '".$this->Salted($data['password'], strtolower($data['username']))."' and status = '1'");

        $message = '';

            foreach($query->result() as $result){
                $this->session->set_userdata('username', $result);

                if($result['username'] != '')
                {

                    $this->session->set_userdata('authorized', 'yes');
                    $this->session->set_userdata('name', $result['firstname']. " " .$result['lastname']);
                    $this->session->set_userdata('userlevel', $result['userlevel']);
                    $this->session->set_userdata('user', $result['username']);

                    $message = array("message" => "Successfully Logged In");
                }

                else{
                    $message = array("message" => "Login Failed ... Try Again");
                }
            }

        echo json_encode($message);

    }

    private function Salted($password, $username){

        $query = $this->db->query("select password from users where username = '".$username."'");

        //$results = $query->result_array();

      foreach($query->result() as $result){

            $getpass = $result->password;

            $hashed_password = crypt($password, '$2a$07$usesomesillystringforsalt$');

            if($getpass == '' || $getpass == NULL){

                $pass = crypt($password, '$2a$07$usesomesillystringforsalt$');

                $this->db->query("update users set password = '".$pass."' where username = '".$username."'");

                return $pass;

            }

            elseif(hash_equals($result->password, crypt($password, $hashed_password))){

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
