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
				$cate_id = 1;
				$cate_title = '地理';
				break;
			case 'lishi':
				$cate_id = 2;
				$cate_title = '历史';
				break;
			case 'zhengzhi':
				$cate_id = 3;
				$cate_title = '政治';
				break;
			case 'wenzong':
				$cate_id = 4;
				$cate_title = '文综';
				break;
			default:
				header('Location:'.base_url());
				return;
		}
		$data['cate']['title'] = $cate_title;
		$data['cate']['doc'] = $this->cate_model->get_list($cate_id);
		$this->load->view('cate_view', $data);
	}
}
