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

    public function addSalesContent($salescontent)
    {
        $this->load->helper(array('form', 'url'));

        $this->load->model('upload_model');



        $status = "";
        $msg = "";
        $file_element_name = 'userfile';

        if ($status != "error")
        {
            $config['upload_path'] = base_url().'/assets/business-plate/img/sunny/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 1024 * 8;
            $config['encrypt_name'] = FALSE;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload($file_element_name))
            {
                $status = 'error';
                $msg = $this->upload->display_errors('', '');
            }
            else
            {
                $data = $this->upload->data();
                $image_path = $data['full_path'];
                if(file_exists($image_path))
                {
                    $status = "success";
                    $msg = "File successfully uploaded";
                }
                else
                {
                    $status = "error";
                    $msg = "Something went wrong when saving the file, please try again.";
                }
            }

        }

        $this->db->simple_query("insert into salescontent (salestitle, salescontent, salesimage)
        values('".$salescontent['salestitle']."', '".$salescontent['salescontent']."', '".$_FILES[$file_element_name]."')");

        @unlink($_FILES[$file_element_name]);

        echo json_encode(array('status' => $status, 'msg' => $msg));

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