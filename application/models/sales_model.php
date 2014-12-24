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
        $file_element_name = 'userfile';

        $this->load->helper(array('form', 'url'));

        $this->load->model('upload_model');

        $config['upload_path'] = base_url().'/assets/business-plate/img/sunny/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 1024 * 8;
        $config['encrypt_name'] = FALSE;

        $this->load->library('upload', $config);


        if ( ! $this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            //$this->load->view('upload', $error);

            //var_dump($error);

        } else {
            $file = $this->upload->data();
        }
        //$file = $this->upload->data();

        //@unlink($_FILES[$file_element_name]);

        $this->db->simple_query("insert into salescontent (salestitle, salescontent, salesimage)
        values('".$data['salestitle']."', '".$data['salescontent']."', '".$_FILES[$file_element_name]."')");

        return $error;
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