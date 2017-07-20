<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

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

    	//test
    	// $this->load->library('File');
    	$this->load->library('Mcrypt');
		$this->load->model('view_model');

		// $this->output->cache(60);
    }

    private function checkrobot($useragent=''){
	    static $kw_spiders = array('bot', 'crawl', 'spider' ,'slurp', 'sohu-search', 'lycos', 'robozilla');
	    static $kw_browsers = array('msie', 'netscape', 'opera', 'konqueror', 'mozilla');
	 
	    $useragent = strtolower(empty($useragent) ? $_SERVER['HTTP_USER_AGENT'] : $useragent);
	    if(strpos($useragent, 'http://') === false && $this->dstrpos($useragent, $kw_browsers)) return false;
	    if($this->dstrpos($useragent, $kw_spiders)){
	    	log_message('error', 'robot come home: '.$useragent);
	    	return true;
	    }
	    return false;
	}
	
	private function dstrpos($string, $arr, $returnvalue = false) {
	    if(empty($string)) return false;
	    foreach((array)$arr as $v) {
	        if(strpos($string, $v) !== false) {
	            $return = $returnvalue ? $v : true;
	            return $return;
	        }
	    }
	    return false;
	}
    
	public function index($view_id)
	{
		/*
		 * 容错处理
		 * 如果view_id不是数字或整数，转到404
		 */
		if( !is_numeric($view_id) || ($view_id > intval($view_id)) ){
			redirect(base_url('error'.'.html'));
		}
		/*
		*  整数化view_id，用于处理1491499779.0
		*/
		$view_id = intval($view_id);
		/*
		 * 容错处理
		 * 如果view_id不是数字或整数，转到404
		 */
		$detail = $this->view_model->get_detail($view_id);
		if( !$detail ){
			redirect(base_url('error'.'.html'));
		}
		/*
		*  让Footer距离底部一定间隙，不被Download Tool遮挡
		*/
		$data['class_footer'] = 'view-footer';
		/*
		*  文档详细信息
		*/
		$data['page']['title'] = $detail['doc_title'];
		$data['page']['content'] = $detail['doc_content'];
		$data['page']['cate_name'] = $detail['doc_cate_name'];
		$data['page']['num'] = $detail['doc_page_num'];
		$data['page']['dl_forbidden'] = $detail['doc_dl_forbidden'];
		$data['page']['dl'] = $this->mcrypt->encode($detail['doc_id']);
		$data['page']['ext_name'] = $detail['doc_ext_name'];
		/*
		*  如果是机器人来访，记录下来
		*/
		if( $this->checkrobot() ){
			log_message('error', 'robot come page: '.$detail['doc_title']);
		}
		/*
		*  获取右侧边栏列表
		*/
		$data['page']['new'] = $this->view_model->get_new();
		$data['page']['hot'] = $this->view_model->get_hot();
		$data['page']['rand'] = $this->view_model->get_rand();
		/*
		*  Html view
		*/
		if( $detail['doc_html_view'] ){
			$data['page']['doc_url'] = $detail['doc_url'];
			$data['page']['user_url'] = $detail['user_url'];
			//
			$this->load->view('html_view', $data);
		/*
		*  Flash view
		*/
		}else{
			//
			$data['page']['swf'] = 'http://view.mmdili.com/pv';
			$data['page']['data'] = 'http://view.mmdili.com/'.$detail['user_url'].'/'.$view_id.'/';
			$data['page']['width'] = 960;
			$data['page']['height'] = intval((960/$detail['doc_width'])*$detail['doc_height']);
			$data['page']['poly2bitmap'] = $detail['doc_poly2bitmap'];
			//
			$this->load->view('view_view', $data);
		}
	}
}
