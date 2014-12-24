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

    public function addSalesContent()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->model('upload_model');

        $status = "";
        $msg = "";
        $file_element_name = 'userfile';
        $salesdata = $this->input->post();

        if ($status != "error")
        {
            $config['upload_path'] = './assets/business-plate/img/sunny/';
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

                $image = $data['file_name'];
                if(file_exists($image_path))
                {
                    $status = "success";
                    $msg = "File successfully uploaded ".$salesdata;
                }
                else
                {
                    $status = "error";
                    $msg = "Something went wrong when saving the file, please try again.";
                }
            }

        }




        //$this->load->model('sales_model');

        //$this->sales_model->addSalesContent($salesdata, $image = false);


        @unlink($_FILES[$file_element_name]);

        echo json_encode(array('status' => $status, 'msg' => $msg));

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

    public function updatesettings()
    {

        $data = $this->input->post();

        $this->load->model('sites_model');

        $this->sites_model->updateSiteSettings($data);

        echo "Updated";

    }

    public function getmortgagerate()
    {
        $data = $this->input->post();
    }

    public function addToNewsletter()
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

        echo $this->login_model->login($data);


    }
}