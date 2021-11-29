<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	 public function __construct(){
		parent::__construct();
		$this->load->model("Productos_model");
	}

	public function index()
	{	
		$data = array(
			'productos' => $this->Productos_model->getProductos(),
		);
		$this->load->view('layouts/headermain');
		$this->load->view('layouts/aside2');
		$this->load->view('products/shop',$data);
		$this->load->view('layouts/footermain');
	}
}
