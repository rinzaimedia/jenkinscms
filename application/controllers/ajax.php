<?php

class Ajax extends CI_Controller
{
    public function updateCSS($data)
    {
        $css = array('css' => $data['css']);

        $this -> db -> where('id', 1);
        $this -> db -> update('settings', $css);

        return true;
    }

    public function updatePage()
    {

        $data = $this->input->post();

        $this->load->model('page_model');

        $this->page_model->updatePage($data);

    }

    public function insertPage()
    {
        $data = $this->input->post();

        $this->load->model('page_model');

        $this->page_model->insertPage($data);
    }

    public function addSalesContent($data)
    {

        $data = $this->input->post();

        $time = time();

        move_uploaded_file($_FILES['salesimage']['tmp_name'], APPPATH."/assets/uploads/".$time."".$_FILES['salesimage']['type']);

        //$data['image'] = APPPATH."../assets/uploads/".$time.".".$data['salesimage']['type'];

        $this->load->model('sales_model');

        $this->sales_model->addSalesContent($data);

    }

    public function updateSalesContent()
    {

        $data = $this->input->post();

        //$time = time();

        $this->load->model('sales_model');

        $this->sales_model->updateSalesContent($data);
    }

    public function deleteSalesContent()
    {
        $data = $this->input->post();

        $this->load->model('sales_model');

        $this->sales_model->deleteSalesContent($data);
    }

    public function updatesettings($data)
    {

        $data = $this->input->post();

        $this->load->model('sites_model');

        $this->sites_model->updateSiteSettings($data);

        echo "Updated";

    }

    public function getmortgagerate($data)
    {
        $data = $this->input->post();
    }

    public function addToNewsletter($data)
    {
        $data = $this->input->post();

        $this->load->model('sites_model');

        $this->sites_model->addToNewsletter($data);

        return true;
    }

    public function addWorkItem()
    {
        $data = $this -> input ->post();

        $this -> load -> model('work_model');

        $this -> work_model -> addWorkItem($data);

        return true;
    }

    public function updateWorkItem()
    {
        $data = $this -> input ->post();

        $this -> load -> model('work_model');

        $this -> work_model -> updateWorkItem($data);

        return true;
    }

    public function deleteWorkItem()
    {
        $data = $this -> input ->post();

        $this -> load -> model('work_model');

        $this -> work_model -> deleteWorkItem($data);

        return true;
    }

    public function trylogin()
    {
        $data = $this->input->post();

        $this->load->model('login_model');

        return $this->login_model->login($data);


    }
}