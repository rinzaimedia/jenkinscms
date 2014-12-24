<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


    public function __construct()
    {
        date_default_timezone_set('America/Los_Angeles');
    }
	public function index()
	{
        $this->load->model('page_model');
        $this->load->model('sites_model');
        $this->load->model('sales_model');
        $this->load->model('work_model');

        $this->load->helper('url');

        $results['results'] = $this->sites_model->getSettings();

        $results['pages'] = $this->page_model->getPages(1);

        $results['sales'] = $this->sales_model->getSalesContent();

        $results['links'] = $this->sites_model->getLinks();

        $results['workitems'] = $this->work_model->getWorkItem();

        $results['home'] = $this->sites_model->getHomeContent();

        $results['rss'] = json_decode($this->sites_model->getRSS("http://feeds.feedburner.com/dailyrealestatenews"), TRUE);

        $results['weather'] = json_decode($this->sites_model->getWeather($results['results'][0]['city'], $results['results'][0]['statecountry']), TRUE);

		$this->load->view('includes/header', $results);
		$this->load->view('welcome_message', $results);
		$this->load->view('includes/footer', $results);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */