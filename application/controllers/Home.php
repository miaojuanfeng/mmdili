<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
    	$this->load->model('home_model');
    }

	public function index()
	{
		$this->load->library('email');
		$this->email->from('miaojuanfeng@qq.com', 'Your Name');
		$this->email->to('michael.miao@ec-solutions.com.hk');
		// $this->email->cc('another@another-example.com');
		// $this->email->bcc('them@their-example.com');
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');
		$this->email->send();

		$data['doc']['cate'] = $this->home_model->get_new_doc();
		//
		$data['doc']['new'] = $this->home_model->get_new();
		$data['doc']['hot'] = $this->home_model->get_hot();
		$data['doc']['rand'] = $this->home_model->get_rand();
		//
		$this->load->view('home_view', $data);
	}
}
