<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

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
    	$this->cii_pagination = new cii_pagination();
		$this->load->model('search_model');
    }
    
	public function index()
	{
		$k 	= $this->input->get('k', true)  ? str_replace(array('\'','"'), '', $this->input->get('k', true))  : '';
		$pn = $this->input->get('pn', true) ? $this->input->get('pn', true) : 1;
		// 每页显示数量
		$limit = 10;
		// 总记录数量
		$total = $this->search_model->get_count($k);
		// 总页数
		$page = ceil($total/$limit);
		/*
		 * 容错处理
		 * 1.如果页数不是数字
		 * 2.如果页数不是整数
		 * 3.如果页数小于首页
		 * 4.如果页数大于尾页
		 * 转到404
		*/
		if( (!empty($pn) && !is_numeric($pn)) || ($pn > intval($pn)) || ($pn < 1) || ($page && $pn > $page) ){
			redirect(base_url('error'.'.html'));
		}
		// 计算偏移量
		$offset = ($pn - 1) * $limit;
		$data['search']['key'] = $k;
		$data['search']['doc'] = $this->search_model->search_doc($k, $limit, $offset);
		foreach($data['search']['doc'] as $key => $value){
			$data['search']['doc'][$key]['doc_desc'] = mb_substr(strip_tags($value['doc_desc']), 0, 250);
		}
		$data['search']['pn'] = $pn;

		$cii_pagination['base_url'] = base_url('search?k='.$k.'&pn=');
		$cii_pagination['per_page'] = $limit;
		$cii_pagination['total_rows'] = $total;
		$cii_pagination['first_link'] = '首页';
		$cii_pagination['prev_link'] = '上一页';
		$cii_pagination['next_link'] = '下一页';
		$cii_pagination['last_link'] = '尾页';
		$this->cii_pagination->initialize($cii_pagination);
		//
		$data['class_footer'] = 'fixed-footer';
		//
		$this->load->view('search_view', $data);
	}
}
