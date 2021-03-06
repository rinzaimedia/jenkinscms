<?php

class Page_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getPages($visible = false)
    {

        if($visible != false){
            $query = $this -> db -> query("select * from pages where visible = 1 and pageid !=''");
        }
        else{
            $query = $this -> db -> query("select * from pages where pageid !=''");
        }
        $results = $query->result_array();

        return $results;
    }

    public function getPage($id)
    {

        if(is_numeric($id))
        {
            $query = $this -> db -> where('pageid', $id)->get('pages');
        }
        else
        {
            $query = $this -> db -> where('pageurl', $id)->get('pages');
        }

        $results = $query->result_array();

        return $results;
    }

    public function updatePage($data)
    {

        $this->db->simple_query("update pages
                                    set pagetitle = '".$data['pagetitle']."',
                                    pageurl = '".str_replace(" ", "-",$data['pageurl'])."',
                                    pagecontent = '".htmlentities(str_replace("\n", "<br />",$data['editor']), ENT_QUOTES)."',
                                    visible = '".$data['visible']."'
                                    where
                                    pageid = '".$data['pageid']."'");
    }

    public function insertPage($data)
    {
        $this->db->simple_query("insert into pages (pageurl, pagetitle, pagecontent, visible) values('".str_replace(" ", "-",$data['pageurl'])."', '".$data['pagetitle']."', '".$data['editor']."', '".$data['visible']."')");
    }

    public function deletePage($data)
    {
        $this->db->simple_query("delete from pages where pageid = '".$data."'");
    }

}