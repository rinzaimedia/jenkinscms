<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage extends CI_Controller {

    public function index()
    {

        $this->load->view('admin/header');
        $this->load->view('admin/welcome');
        $this->load->view('admin/footer');

    }
    public function settings()
    {

        $this->load->model('sites_model');

        $results['settings'] = $this->sites_model->getSettings();

        $this->load->view('admin/header');
        $this->load->view('admin/settings', $results);
        $this->load->view('admin/footer');
    }

    public function pages($id = false)
    {
        $this->load->view('admin/header');

        $this->load->model('page_model');


        if($id == false && $id != 'addpage')
        {
            $result['pages'] = $this->page_model->getPages();
            $this->load->view('admin/pages', $result);
        }
        elseif($id == 'addpage')
        {
            $this->load->view('admin/addpage');
        }
        else
        {
            $result['page'] = $this->page_model->getPage($id);
            $this->load->view('admin/page', $result);
        }
        $this->load->view('admin/footer');
    }

    public function salescontent($id = false)
    {
        $this->load->view('admin/header');

        $this->load->model('sales_model');

        if($id != false && $id != 'addentry')
        {
            $results['salesitem'] = $this->sales_model->getSalesContent($id);

            $this->load->view('admin/salescontentitem', $results);

        }
        elseif($id == 'addentry')
        {
            $this->load->view('admin/addsalescontent');
        }
        else
        {
            $results['salesitems'] = $this->sales_model->getSalesContent();

            $this->load->view('admin/salescontentlist', $results);
        }

        $this->load->view('admin/footer');

    }



    public function workitems($id = false)
    {
        $this->load->view('admin/header');

        $this->load->model('work_model');

        if($id != false && $id != 'addworkitem')
        {
            $results['workentry'] = $this->work_model->getWorkItem($id);

            $this->load->view('admin/workitem', $results);

        }
        elseif($id == 'addentry')
        {
            $this->load->view('admin/workitem');
        }
        else
        {
            $results['workitem'] = $this->work_model->getWorkItems();

            $this->load->view('admin/workitems', $results);
        }

        $this->load->view('admin/footer');

    }

    public function css()
    {
        $this->load->model('sites_model');

        $results['css'] = $this->sites_model->getCss();

        $this->load->view('admin/header');
        $this->load->view('admin/css', $results);
        $this->load->view('admin/footer');
    }

    public function curl()
    {
        $this->load->model('login_model');

        $results['curl'] =  $this->login_model->checkLogin();

        var_dump($results);
    }

}