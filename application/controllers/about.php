<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

 	public function __construct(){
		parent::__construct();
		//if (!$this->session->userdata("login")){
		//	redirect(base_url());
		//}
	}

	public function index(){	
		$this->load->view('layouts/headermain');
		$this->load->view('admin/about');
		$this->load->view('layouts/footermain');
	}
}