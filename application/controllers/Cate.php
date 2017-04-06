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
    	$this->load->library('pagination');
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
		//
		$data['cate']['hot'] = $this->cate_model->get_hot($cate_id);
		$data['cate']['rand'] = $this->cate_model->get_rand($cate_id);
		//
		$config['pagination']['base_url'] = base_url('cate/'.$cate_url.'/');
		$config['pagination']['full_tag_open'] = '<div class="pn"><div class="pn-container">';
		$config['pagination']['full_tag_close'] = '</div></div>';
		$config['pagination']['first_tag_open'] = '<div>';
		$config['pagination']['first_tag_close'] = '</div>';
		$config['pagination']['last_tag_open'] = '<div>';
		$config['pagination']['last_tag_close'] = '</div>';
		$config['pagination']['next_tag_open'] = '<div>';
		$config['pagination']['next_tag_close'] = '</div>';
		$config['pagination']['prev_tag_open'] = '<div>';
		$config['pagination']['prev_tag_close'] = '</div>';
		$config['pagination']['cur_tag_open'] = '<span class="current">';
		$config['pagination']['cur_tag_close'] = '</span>';
		$config['pagination']['num_tag_open'] = '<span>';
		$config['pagination']['num_tag_close'] = '</span>';
		$config['pagination']['use_page_numbers'] = true;
		$config['pagination']['first_link'] = '<<';
		$config['pagination']['prev_link'] = '&lt;';
		$config['pagination']['next_link'] = '&gt;';
		$config['pagination']['last_link'] = '>>';
		$config['pagination']['uri_segment'] = 3;
		$config['pagination']['total_rows'] = 200;
		$config['pagination']['per_page'] = 20;
		$this->pagination->initialize($config['pagination']);
		//
		$this->load->view('cate_view', $data);
	}
}
