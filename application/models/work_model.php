<?php

class Work_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function getWorkItem($id = false){

        if($id == false)
        {
            $query = $this -> db -> query("select * from ourwork where workid !=''");

        }
        else
        {
            $query = $this -> db -> query("select * from ourwork where workid ='".$id."'");

        }

        $results = $query->result_array();

        return $results;

    }
    public function addWorkItem($data){

        $this->db->simple_query("insert into ourwork (workimage, workentry) values('".$data['workimage']."', '".$data['workentry']."')");

    }

    public function updateWorkItem($data){

        if(isset($data['workid'])){

        $this->db->simple_query("update ourwork
                                    set
                                    worktitle = '".$data['worktitle']."',
                                    workimage = '".$data['workimage']."',
                                    workentry = '".$data['workentry']."'
                                    where workid = ".$data['workid']);

        }
        else{
            $this->db->simple_query("insert into ourwork (worktitle, workimage, workentry) values('".$data['worktitle']."', '".$data['workimage']."', '".$data['workentry']."')");

        }

    }

    public function deleteWorkItem($data)
    {
        $this->db->simple_query("delete from ourwork where workid = '".$data."'");
    }

}