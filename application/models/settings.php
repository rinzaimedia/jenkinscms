<?php

class Sites_model extends CI_Model {

    public function getSettings(){

        $this->db->where('id', '1')->get('settings');

        $query = $this->db->query("select * from settings where id = '1'");

        $results = $query->result_array();

        return $results;

    }

    public function updateSettings($data)
    {

        $values = array('sitename' => $data['sitename'], 'industry' => $data['industry'], 'address1' => $data['address1'],
                        'address2' => $data['address2'], 'city' => $data['city'], 'state-country' => $data['state-country'],
                        'zip' => $data['zip'], 'description' => $data['description'], 'email' => $data['email'],
                        'quote' => $data['quote'],
                        'facebook-personal' => $data['facebook-personal'], 'facebook-page' => $data['facebook-page'],
                        'twitter' => $data['twitter'], 'google-plus' => $data['google-plus'], 'linkedin' => $data['linkedin'],
                        'phone' => $data['phone'], 'originalurl' => $data['originalurl'], 'css' => $data['css'],
                        'name' => $data['name'], 'modaltext' => $data['modaltext'], 'showscroller' => $data['showscroller'],
                        'timezone' => $data['timezone']);
        $where = "id = 1";

        $this -> db -> update_string('settings', $values, $where);
    }

    public function getMainImages()
    {
        $query = $this -> db -> where('id !=', '')->get('imagelist');

        $results = $query->result_array();

        return $results;
    }

}