<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller {

	 public function __construct(){
		parent::__construct();
	}

	public function index()
	{	
		$this->load->view('layouts/headermain');
		$this->load->view('layouts/aside2');
		$this->load->view('admin/resultsuccess');
		$this->load->view('layouts/footermain');
	}

	public function error()
    {
		$this->load->view('layouts/headermain');
		$this->load->view('layouts/aside2');
		$this->load->view('admin/resulterror');
		$this->load->view('layouts/footermain');	
    }

}
