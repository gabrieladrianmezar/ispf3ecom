<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Protein extends CI_Controller {

	 public function __construct(){
		parent::__construct();
		$this->load->model("Productos_model");
	}

	public function index()
	{	
		$data = array(
			'producto' => $this->Productos_model->getProducto(4),
		);	
		$this->load->view('layouts/headermain');
		$this->load->view('products/protein',$data);
		$this->load->view('layouts/footermain');
	}

}
