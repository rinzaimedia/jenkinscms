<?php

class Css_Model extends CI_Model
{

    public function updateCSS($data)
    {
        $field = array('css'=>$data);
        $this -> db -> update('settings', $field);

        file_put_contents(FCPATH.'assets/css/custom.css', $data);
    }

}