<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

 	public function __construct(){
		parent::__construct();
		//if (!$this->session->userdata("login")){
		//	redirect(base_url());
		//}
        $this->load->model("Ventas_model");
		$this->load->model("Clientes_model");
		$this->load->model("Productos_model");
	}

    public function index()
    {
		$data = array(
			'tipocomprobante' => $this->Ventas_model->getComprobante(1),
			'clientes' => $this->Clientes_model->getClientes(),
		);
		$this->load->view('layouts/headermain');
		$this->load->view('admin/cart',$data);
		$this->load->view('layouts/footermain');	
    }

    public function getProductos(){
		$valor = $this->input->post("valor");
		$clientes = $this->Ventas_model->getProductosDB($valor);
		echo json_encode($clientes);
	}

    public function store(){;
		$idcliente = $this->input->post("idcliente");
		$fecha = $this->input->post("fecha");
		$subtotal = $this->input->post("subtotal");
		$iva = $this->input->post("iva");
		$descuento = $this->input->post("descuento");
		$total = $this->input->post("total");
		$idcomprobante = $this->input->post("idcomprobante");
		$idusuario = $this->session->userdata("idusuario");
		$numerodocumento = $this->input->post("numero");
		$serie = $this->input->post("serie");

		$idproductos = $this->input->post("idproductos");
		$precios = $this->input->post("precios");
		$cantidades = $this->input->post("cantidades");
		$importes = $this->input->post("importes");

		$data = array(
			"idcliente" => $idcliente,
			"fecha" => $fecha,
			"subtotal" => $subtotal,
			"iva" => $iva,
			"descuento" => $descuento,
			"total" => $total,
			"idtipocomprobante" => $idcomprobante,
			"idusuario" => $idusuario,
			"numerodocumento" => $numerodocumento,
			"serie" => $serie,

		);

		//echo "-array ids: ";
		//print_r ($idproductos);	
		//echo " -cantidad prod: ";
		//echo count($idproductos);
		
		if ($this->Ventas_model->save($data)){
			$idventa = $this->Ventas_model->lastID();
			//echo " -idventa: ";
			//echo $idventa;}
			//else{
			//	echo " o ";
			//}
			$this->updateComprobante($idcomprobante);
			$this->save_detalle($idproductos,$idventa,$cantidades,$precios,$importes);
			redirect(base_url()."result/success");
		}else{
			redirect(base_url(),"result/error");
		}

	}

	protected function updateComprobante($idcomprobante){
		$comprobanteActual = $this->Ventas_model->getComprobante($idcomprobante);
		$data = array(
			'cantidad' => $comprobanteActual->cantidad + 1,
			
		);
		$this->Ventas_model->updateComprobante($idcomprobante,$data);
	}

	protected function save_detalle($productos,$idventa,$cantidades,$precios,$importes){
		for ($i=0; $i < count($productos); $i++) {
			$data = array(
				'idproducto' => $productos[$i],
				'idventa' => $idventa,
				'cantidad' => $cantidades[$i],
				'precio' => $precios[$i],
				'subtotal' => $importes[$i],

			);
			$this->Ventas_model->saveDetalle($data);
			$this->updateProducto($productos[$i],$cantidades[$i]);
			}
	}

	protected function updateProducto($idproducto,$cantidad){
		$productoActual = $this->Productos_model->getProducto($idproducto);
		$data = array(
			"stock" => $productoActual->stock - $cantidad,

		);
		$this->Productos_model->update($idproducto,$data);
	}
}