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
    }
    
	public function index($view_id)
	{
		$data['class_footer'] = 'view-footer';
		//
		$data['page']['swf'] = base_url('assets/lib/mmdili');
		$data['page']['data'] = base_url('data/'.$view_id.'/');
		switch ($view_id) {
			case 1:
				$data['page']['num'] = 33;
				$data['page']['width'] = 968;
				$data['page']['height'] = 1365;
				$data['page']['title'] = '世界地理高考题选萃';
				$file_name = 'sjdl.doc';
				break;
			case 2:
				$data['page']['num'] = 41;
				$data['page']['width'] = 968;
				$data['page']['height'] = 1369;
				$data['page']['title'] = 'Flexpaper二次开发入门教程';
				$file_name = 'eckf.pdf';
				break;
		}
		$data['page']['init'] = ( $data['page']['num'] < 3 ) ? $data['page']['num'] : 3;
		$data['page']['more'] = ( $data['page']['num'] - 3 ) > 0 ? ( $data['page']['num'] - 3 ) : 0;
		//
		$data['dl']['view_id'] = $view_id;
		$data['dl']['link'] = $this->mcrypt->encode($file_name);
		//
		$this->load->view('view_view', $data);
	}
}
