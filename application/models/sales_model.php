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
        $this->db->simple_query("insert into salescontent (salestitle, salescontent) values('".$data['salestitle']."', '".$data['salescontent']."')");
    }

    public function deleteSalesContent($data)
    {
        $this->db->simple_query("delete from salescontent where salesid = '".$data['salesid']."'");
    }

    public function updateSalesContent($data)
    {
        $this->db->simple_query("update salescontent set salestitle = '".$data['salestitle']."', salescontent = '".$data['salescontent']."' where salesid = '".$data['salesid']."'");
    }

}