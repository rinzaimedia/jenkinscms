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

    public function updateWorkItem($worktitle, $workentry, $workid = false, $workimage = false){

        if(workid != ''){

        $this->db->simple_query("update ourwork
                                    set
                                    worktitle = '".$worktitle."',
                                    workimage = '".$workimage."',
                                    workentry = '".$workentry."'
                                    where workid = ".$workid);

        }
        else{
            $this->db->simple_query("insert into ourwork (worktitle, workimage, workentry) values('".$worktitle."', '".$workimage."', '".$workentry."')");

        }

    }

    public function deleteWorkItem($data)
    {
        $this->db->simple_query("delete from ourwork where workid = '".$data."'");
    }

}