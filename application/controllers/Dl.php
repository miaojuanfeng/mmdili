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
    	// $this->load->helper('url');
    	$this->load->library('File');
    	$this->load->library('Mcrypt');
    }
    
	public function index($file_dir, $file_name)
	{
		$file_name = $this->mcrypt->decode($file_name);
		if( !empty($file_name) ){
			$this->file->readFile($file_dir, $file_name);
		}
	}
}
