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
        $this->load->model(array('page_model','sites_model', 'sales_model'));

        $this->load->helper('url');

        //$query = $this->db->query("select * from settings where id = '1'");

        $results['results'] = $this->sites_model->getSettings();

        $results['pages'] = $this->page_model->getPages();

        $results['sales'] = $this->sales_model->getSalesContent();

        $results['links'] = $this->sites_model->getLinks();

        $results['home'] = $this->sites_model->getHomeContent();

        $results['rss'] = json_decode($this->sites_model->getRSS("http://feeds.feedburner.com/dailyrealestatenews"), TRUE);

        $results['weather'] = json_decode($this->sites_model->getWeather($results['results'][0]['city'], $results['results'][0]['statecountry']), TRUE);

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

        $this->load->helper('url');

        //$query = $this->db->query("select * from settings where id = '1'");

        $results['results'] = $this->sites_model->getSettings();

        $results['pages'] = $this->page_model->getPages();

        $results['sales'] = $this->sales_model->getSalesContent();

        $results['links'] = $this->sites_model->getLinks();

        $results['home'] = $this->sites_model->getHomeContent();

        $results['rss'] = json_decode($this->sites_model->getRSS("http://feeds.feedburner.com/dailyrealestatenews"), TRUE);

        $results['weather'] = json_decode($this->sites_model->getWeather($results['results'][0]['city'], $results['results'][0]['statecountry']), TRUE);

        if($page != false)
        {

            $results['pagedata'] = $this->page_model->getPage($page);
            //var_dump($_SESSION);
        }

        $this->load->view('includes/header', $results);
        $this->load->view('page', $results);
        $this->load->view('includes/footer', $results);
    }

}