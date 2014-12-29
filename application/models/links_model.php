<?php

class Links_model extends CI_Model{


    public function getLinks($id = false)
    {

        if($id == false){
            $query = $this->db->query("select * from links where 1 = 1 order by linkorder desc");
        }
        else{
            $query = $this->db->query("select * from links where linkid = '".$id."'");
        }

        $results = $query->result_array();

        return $results;
    }

    public function updateLink($data)
    {

        $this->db->simple_query("update links set
                                url = '".$data['url']."',
                                linkname = '".$data['linkname']."',
                                linkorder = '".$data['linkorder']."'
                                where linkid = '".$data['linkid']."'");
    }

    public function addLink($data)
    {

        $this->db->simple_query("insert into links (linkname, linkorder, url)
                                 values('".$data['linkname']."', '".$data['linkorder']."', '".$data['url']."')");
    }

    public function deleteLink($data)
    {
        $this->db->simple_query("delete from links where linkid = '".$data['linkid']."'");
    }

    public function updateOrder($data)
    {
        
    }

}