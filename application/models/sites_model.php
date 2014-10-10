<?php

class Sites_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getSettings()
    {

        $query = $this->db->query("select * from settings where id = '1'");

        $results = $query->result_array();

        return $results;

    }

    public function updateSiteSettings($data)
    {

        $values = array(
                        'sitename' => $data['sitename'],
                        'industry' => $data['industry'],
                        'address1' => $data['address1'],
                        'address2' => $data['address2'],
                        'city' => $data['city'],
                        'state-country' => $data['statecountry'],
                        'zip' => $data['zip'],
                        'email' => $data['email'],
                        'description' => $data['description'],
                        'facebook-personal' => $data['facebookpersonal'],
                        'facebook-page' => $data['facebookpage'],
                        'twitter' => $data['twitter'],
                        'google-plus' => $data['googleplus'],
                        'linkedin' => $data['linkedin'],
                        'phone' => $data['phone'],
                        'originalurl' => $data['originalurl'],
                        'zillowapi' => $data['zillowapi'],
                        'name' => $data['name'],
                        'modaltext' => $data['modaltext'],
                        'showscroller' => $data['showscroller']
                        );

        //$where = "id = 1"; //

        //$this->db->where('id', '1');

        if($data['industry'] == 'real-estate')
        {
            $zillow = "zillowapi = '".$data['zillowapi']."',";
            $twilio = "twilioapi = '".$data['twilioapi']."',";
        }
        else
        {
            $zillow = "";
            $twilio = "";
        }
        $this->db->simple_query("update settings
                        set
                        sitename = '".$data['sitename']."',
                        industry = '".$data['industry']."',
                        address1 = '".$data['address1']."',
                        address2 = '".$data['address2']."',
                        city = '".$data['city']."',
                        statecountry = '".$data['statecountry']."',
                        zip = '".$data['zip']."',
                        email = '".$data['email']."',
                        description = '".$data['description']."',
                        homecontent = '".str_replace("\n", "<br />",$data['editor'])."',
                        facebookpersonal = '".$data['facebookpersonal']."',
                        facebookpage = '".$data['facebookpage']."',
                        twitter = '".$data['twitter']."',
                        googleplus = '".$data['googleplus']."',
                        linkedin = '".$data['linkedin']."',
                        phone = '".$data['phone']."',
                        originalurl = '".$data['originalurl']."',
                        ".$zillow."
                        ".$twilio."
                        name = '".$data['name']."',
                        modaltext = '".$data['modaltext']."',
                        showscroller = '".$data['showscroller']."' where id = 1");

        return true;

    }

    public function getMainImages()
    {
        $query = $this -> db -> query("select * from imagelist where id !=''");

        $results = $query->result_array();

        return $results;
    }

    public function getLinks()
    {
        $query = $this -> db -> query("SELECT * FROM links ORDER BY linkorder ASC");

        $results = $query->result_array();

        return $results;
    }

    public function getWeather($city, $state)
    {
        $url="http://api.openweathermap.org/data/2.5/weather?q=".$city.",".$state;

        $json = file_get_contents($url);

        return $json;

    }

    public function getHomeContent()
    {
        $query = $this -> db -> query("select * from pages where pageurl = 'welcome'");

        $results = $query->result_array();

        return $results;
    }

    public function getUser()
    {
        $url = "http://wmsapi/user/1";

        return file_get_contents($url);
    }

    public function getMessages()
    {
        $query = $this -> db -> where('id', '1')->get('settings');

        $results = $query->result_array();

    }


    public function getCss()
    {
        $query = $this -> db -> where('id', '1')->get('settings');

        $results = $query->result_array();

        return $results;
    }

    public function getRSS($url)
    {
        $fileContents= file_get_contents($url);

        $fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);

        $fileContents = trim(str_replace('"', "'", $fileContents));

        $simpleXml = simplexml_load_string($fileContents);

        $json = json_encode($simpleXml);

        return $json;

    }

    public function addToNewsletter($data)
    {
        $this->load->library('email');

        $settings = self::getSettings();

        $this->email->from($data['NewsletterEmail'], $data['NewsletterEmail']);
        $this->email->to($settings[0]['email']);

        $this->email->subject('Add to News Letter');
        $this->email->message($data['email'].' wants to be added to the news letter');

        $this->email->send();
    }


}