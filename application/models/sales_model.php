<?php

class Sales_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getSalesContent($id = false)
    {
        if($id == false)
        {
            $query = $this -> db -> query("select * from salescontent where salesid !=''");

        }
        else
        {
            $query = $this -> db -> query("select * from salescontent where salesid ='".$id."'");

        }

        $results = $query->result_array();

        return $results;

    }

    public function addSalesContent($data)
    {
        $file_element_name = 'salesimage';

        $this->load->model('upload_model');

        $config['upload_path'] = APPPATH.'../assets/business-plate/img/sunny/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 1024 * 8;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        $file = $this->upload->data();

        @unlink($_FILES[$file_element_name]);

        $this->db->simple_query("insert into salescontent (salestitle, salescontent, salesimage)
        values('".$data['salestitle']."', '".$data['salescontent']."', '".$file['file_name']."')");
    }

    public function deleteSalesContent($data)
    {
        $this->db->simple_query("delete from salescontent where salesid = '".$data['salesid']."'");
    }

    public function updateSalesContent($data)
    {
        $this->db->simple_query("update salescontent
                                set salestitle = '".$data['salestitle']."',
                                salescontent = '".$data['salescontent']."',
                                salesimage = '".$data['salesimage']."'
                                where salesid = '".$data['salesid']."'");
    }

}