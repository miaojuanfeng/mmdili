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
    }
    
	public function index($view_id)
	{
		$data['class_footer'] = 'view-footer';
		//
		$detail = $this->view_model->get_detail($view_id);
		$data['page']['swf'] = 'http://mmpub.oss-cn-shanghai.aliyuncs.com/pv';
		$data['page']['data'] = 'http://mmpub.oss-cn-shanghai.aliyuncs.com/view/'.$detail['user_url'].'/'.$view_id.'/';
		$data['page']['num'] = $detail['doc_page_num'];
		$data['page']['width'] = 968;
		$data['page']['height'] = intval((968/$detail['doc_width'])*$detail['doc_height']);
		$data['page']['title'] = $detail['doc_title'];
		$file_name = 'sjdl.doc';
		$data['page']['init'] = ( $data['page']['num'] < 3 ) ? $data['page']['num'] : 3;
		$data['page']['more'] = ( $data['page']['num'] - 3 ) > 0 ? ( $data['page']['num'] - 3 ) : 0;
		//
		$data['dl']['view_id'] = $view_id;
		$data['dl']['link'] = $this->mcrypt->encode($file_name);
		//
		$this->load->view('view_view', $data);
	}
}
