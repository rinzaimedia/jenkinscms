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
        $salestitle = $this->input->get('salestitle');
        $salescontent = $this->input->get('salescontent');

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
                    $msg = "Entry successfully added";
                }
                else
                {
                    $status = "error";
                    $msg = "Something went wrong when saving the file, please try again.";
                }
            }

        }


        $this->load->model('sales_model');

        $this->sales_model->addSalesContent($salestitle, $salescontent, '/assets/business-plate/img/sunny/'.$image);


        echo json_encode(array('status' => $status, 'msg' => $msg));

    }

    public function updateSalesContent()
    {

        $this->load->helper(array('form', 'url'));

        $this->load->model('upload_model');

        $status = "";
        $msg = "";
        $file_element_name = 'userfile';
        $salestitle = $this->input->get('salestitle');
        $salescontent = $this->input->get('salescontent');
        $salesid = $this->input->get('salesid');

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
                    $msg = "Entry successfully added";
                }
                else
                {
                    $status = "error";
                    $msg = "Something went wrong when saving the file, please try again.";
                }
            }

        }

        if($file_element_name != ''){
           $img_src = '/assets/business-plate/img/sunny/'.$image;
        }
        else{
            $img_src = '';
        }


        $this->load->model('sales_model');

        $this->sales_model->updateSalesContent($salestitle, $salescontent, $salesid, $img_src);


        echo json_encode(array('status' => $status, 'msg' => $msg));
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
        $this->load->helper(array('form', 'url'));

        $this->load->model('upload_model');

        $status = "";
        $msg = "";
        $file_element_name = 'workimage';
        $worktitle = $this->input->get('worktitle');
        $workentry = $this->input->get('workentry');
        $workid = $this->input->get('workid');

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
                    $msg = "Entry successfully added";
                }
                else
                {
                    $status = "error";
                    $msg = "Something went wrong when saving the file, please try again.";
                }
            }

        }

        if($file_element_name != ''){
            $img_src = '/assets/business-plate/img/sunny/'.$image;
        }
        else{
            $img_src = '';
        }


        $this->load->model('work_model');

        $this->sales_model->updateWorkItem($worktitle, $workentry, $workid, $img_src);


        echo json_encode(array('status' => $status, 'msg' => $msg));

        return true;
    }

    public function deleteWorkItem()
    {
        $data = $this -> input ->get('workid');

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

    public function getlinks()
    {
       $this->load->model('links_model');

        $results = $this->links_model->getLinks();

       echo json_encode($results);
    }

    public function getPages()
    {

        $this->load->model('page_model');

        $result['pages'] = $this->page_model->getPages();

        echo json_encode($result['pages']);
    }

    public function deletePage()
    {

        $data = $this->input->get("pageid");

        $this->load->model('page_model');

        $this->page_model->deletePage($data);

    }

    public function getWorkItems()
    {
        $this->load->model('work_model');

        $results = $this->work_model->getWorkItem();

        echo json_encode($results);
    }


}