<?php class Users_model extends CI_Model{

    public function getUsers(){

        $query = $this -> db -> query("select * from users where 1=1");

        $results = $query->result_array();

        return $results;


    }

}