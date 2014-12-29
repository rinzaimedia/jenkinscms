<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage extends CI_Controller {

    public function checkSession()
    {
        $this->load->library('session');

        $this->load->helper('url');

        if($this->session->userdata('authorized') != 'yes')
        {
            redirect('/manage/login');
        }
    }

    public function login()
    {

        $this->load->library('session');

        $this->load->helper('url');

        if($this->session->userdata('authorized') == 'yes')
        {
            redirect('/manage/index');
        }

        $this->load->view('admin/login');

    }
    public function logout()
    {
        $this->load->library('session');

        $this->session->sess_destroy();

        $this->load->helper('url');

       redirect('/manage/login');
    }
    public function index()
    {

        self::checkSession();

        $this->load->view('admin/header');
        $this->load->view('admin/welcome');
        $this->load->view('admin/footer');

    }

    public function settings()
    {
        self::checkSession();

        $this->load->model('sites_model');

        $results['settings'] = $this->sites_model->getSettings();

        $timezones = DateTimeZone::listAbbreviations();

        $cities = array();
        foreach( $timezones as $key => $zones )
        {
            foreach( $zones as $id => $zone )
            {
                /**
                 * Only get timezones explicitely not part of "Others".
                 * @see http://www.php.net/manual/en/timezones.others.php
                 */
                if ( preg_match( '/^(America|Antartica|Arctic|Asia|Atlantic|Europe|Indian|Pacific)\//', $zone['timezone_id'] )
                    && $zone['timezone_id']) {
                    $cities[$zone['timezone_id']][] = $key;
                }
            }
        }

        // For each city, have a comma separated list of all possible timezones for that city.
        foreach( $cities as $key => $value )
            $cities[$key] = $key;

        // Only keep one city (the first and also most important) for each set of possibilities.
        $results['cities'] = array_unique( $cities );

        // Sort by area/city name.
        //$results['cities'] = ksort( $cities );

        $this->load->view('admin/header');
        $this->load->view('admin/settings', $results);
        $this->load->view('admin/footer');
    }

    public function pages($id = false)
    {
        self::checkSession();

        $this->load->view('admin/header');

        $this->load->model('page_model');


        if($id == false && $id != 'addpage')
        {
            $result['pages'] = $this->page_model->getPages();

            $result['json'] = json_encode($result['pages']);

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
        self::checkSession();

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
        self::checkSession();

        $this->load->view('admin/header');

        $this->load->model('work_model');

        if($id != false && $id != 'addworkitem')
        {
            $results['workitem'] = $this->work_model->getWorkItem($id);

            $this->load->view('admin/workitem', $results);

        }
        elseif($id == 'addworkitem')
        {
            $this->load->view('admin/workitem');
        }
        else
        {
            $results['workitems'] = $this->work_model->getWorkItem();

            $this->load->view('admin/workitems', $results);
        }

        $this->load->view('admin/footer');

    }

    public function css()
    {
        self::checkSession();

        $this->load->model('sites_model');

        $results['css'] = $this->sites_model->getCss();

        $this->load->view('admin/header');
        $this->load->view('admin/css', $results);
        $this->load->view('admin/footer');
    }

    public function curl()
    {
        self::checkSession();

        $this->load->model('login_model');

        $results['curl'] =  $this->login_model->checkLogin();

        var_dump($results);
    }

    public function users()
    {
        self::checkSession();

        $this->load->model('users_model');

        if($this->session->userdata('userlevel') != 'admin' || $this->session->userdata('userlevel') != 'superadmin'){
            redirect('/manage/index');
        }
        else{

            $results['users'] = $this->users_model->getUsers();
            $this->load->view('admin/header');
            $this->load->view('admin/users', $results);
            $this->load->view('admin/footer');
        }
    }

    public function links($id = false)
    {
        self::checkSession();

        $this->load->view('admin/header');

        $this->load->model('links_model');

        if($id != false && $id != 'addlink')
        {
            $results['links'] = $this->links_model->getLinks($id);
            $this->load->view('admin/editlink', $results);
        }
        elseif($id == 'addlink')
        {
            $this->load->view('admin/addlink');
        }
        else
        {
            $results['links'] = $this->links_model->getLinks();
            $this->load->view('admin/links', $results);
        }

        $this->load->view('admin/footer');
    }

    public function profile()
    {

        self::checkSession();

        $this->load->model('users_model');

    }

}