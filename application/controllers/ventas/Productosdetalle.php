<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productosdetalle extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model("Ventas_model");
		$this->load->model("Clientes_model");
		$this->load->model("Productos_model");
	}

    public function getProductos(){
		$valor = $this->input->post("valor");
		$clientes = $this->Ventas_model->getProductosDB($valor);
		echo json_encode($clientes);
	}
}
