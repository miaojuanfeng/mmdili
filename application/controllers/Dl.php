<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dl extends CI_Controller {

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
    	// $this->load->library('File');
    	$this->load->library('Mcrypt');
    	$this->load->model('dl_model');
    	$this->load->library('Oss');
    }
    
	public function index($doc_id)
	{
		if( empty($doc_id) || !($doc_id = $this->mcrypt->decode($doc_id)) ){
			redirect(base_url('error'.'.html'));
		}
		if( !($file = $this->dl_model->get_url($doc_id)) ){
			redirect(base_url('error'.'.html'));
		}
		
		$user_url = $file['user_url'];
		$doc_url = $file['doc_url'];
        $doc_title = $file['doc_title'];
        $doc_ext_name = $file['doc_ext_name'];
		$object = $user_url.'/'.strtotime(date('Y', $doc_url).'-01-01').'/'.$doc_title.'.'.$doc_ext_name;
		$exist = $this->oss->checkDocExist($object);
    	
echo $this->oss->getSignedUrlForGettingObject($user_url.'/'.strtotime(date('Y', $doc_url).'-01-01').'/'.$doc_title.'.'.$doc_ext_name);
die();
    	if($exist){
    		// header('Location:'.'http://doc.mmdili.com/'.$user_url.'/'.strtotime(date('Y', $doc_url).'-01-01').'/'.$doc_title.'.'.$doc_ext_name);
    		$data['dl']['title'] 	= $file['doc_title'];
			$data['dl']['ext_name'] = $file['doc_ext_name'];
			$data['dl']['url']		= $file['doc_url'];
			$data['dl']['user_name']		= $file['user_name'];
			$data['dl']['dl_forbidden']		= $file['doc_dl_forbidden'];
			$data['dl']['cate_name']= $file['doc_cate_name'];
			$data['dl']['new'] = $this->dl_model->get_new();
			//'http://doc.mmdili.com/'.$user_url.'/'.strtotime(date('Y', $doc_url).'-01-01').'/'.$doc_title.'.'.$doc_ext_name
			$data['dl']['link'] = $this->oss->getSignedUrlForGettingObject($user_url.'/'.strtotime(date('Y', $doc_url).'-01-01').'/'.$doc_title.'.'.$doc_ext_name);
			
			$data['class_footer'] = 'fixed-footer';
			$this->load->view('dl_view', $data);
    	}else{
    		log_message('error', 'File not found: '.$object);
    		redirect(base_url('error'.'.html'));
    	}
	}
}
