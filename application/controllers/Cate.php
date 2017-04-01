<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cate extends CI_Controller {

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
	$this->load->model('cate_model');
    }
    
	public function index($cate_url = '')
	{
		switch( $cate_url ){
			case 'dili':
				$cate_url = 1;
				break;
			case 'lishi':
				$cate_url = 2;
				break;
			case 'zhengzhi':
				$cate_url = 3;
				break;
			case 'wenzong':
				$cate_url = 4;
				break;
			default:
				header('Location:'.base_url());
				return;
		}
		$data['doc'] = $this->cate_model->get_list($cate_url);
		$this->load->view('cate_view', $data);
	}
}
