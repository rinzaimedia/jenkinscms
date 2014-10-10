<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index($page = false)
    {

        if($page != false)
        {

            $results['pagedata'] = $this->page_model->getPage($page);
            //var_dump($_SESSION);
        }

        $this->load->view('includes/header', $results);
        $this->load->view('page', $results);
        $this->load->view('includes/footer', $results);
    }

    public function info($page=false)
    {

        $this->load->model(array('page_model','sites_model', 'sales_model'));

        $results['results'] = $this->sites_model->getSettings();


        $results['settings'] = $this->sites_model->getMainImages();

        if($page != false)
        {



            //$query = $this->db->query("select * from pages where pageurl = '".$page."'");

            $results['pagedata'] = $this->page_model->getPage($page);
            /*if(!empty($checkresult))
            {
                $results['pagedata'] = $checkresult;
            }
            else
            {
                $results['pagedata'] = '404 Not Found';
            }*/


        }

        $results['pages'] = $this->page_model->getPages();

        $results['sales'] = $this->sales_model->getSalesContent();

        $results['user'] = $this->sites_model->getUser();
        //var_dump($results);// die();

        //var_dump($results['user']);die();

        $results['weather'] = json_decode($this->sites_model->getWeather($results['results'][0]['city'], $results['results'][0]['statecountry']), TRUE);

        $this->load->view('includes/header', $results);
        $this->load->view('page', $results);
        $this->load->view('includes/footer', $results);
    }

}