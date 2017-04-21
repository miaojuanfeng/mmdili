<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
    	parent::__construct();
    	$this->load->helper('url');
		// $this->output->cache(60);

		$this->class_footer = 'fixed-footer';
    }
    
	public function about()
	{
		$data['class_footer'] = $this->class_footer;
		$this->load->view('page/about_view', $data);
	}

	public function contact()
	{
		$data['class_footer'] = $this->class_footer;
		$this->load->view('page/contact_view', $data);
	}

	public function code()
	{
		$data['class_footer'] = $this->class_footer;
		$this->load->view('page/code_view', $data);
	}
}
