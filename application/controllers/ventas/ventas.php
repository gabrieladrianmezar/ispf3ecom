<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller {

	private $permisos;
	 public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->permisos = $this->backend_lib->control();
		$this->load->model("Ventas_model");
		$this->load->model("Clientes_model");
		$this->load->model("Productos_model");
	}

	public function index()
	{	
		$data = array(
			'permisos' => $this->permisos,
			'ventas' => $this->Ventas_model->getVentas(),
		);	
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/ventas/list',$data);
		$this->load->view('layouts/footer');
	}

	public function add()
    {
		$data = array(
			'tipocomprobantes' => $this->Ventas_model->getComprobantes(),
			'clientes' => $this->Clientes_model->getClientes(),
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/ventas/add',$data);
		$this->load->view('layouts/footer');	
    }

	public function edit($id){
		$data = array(
			'venta' => $this->Ventas_model->getVenta($id),
		);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/ventas/edit',$data);
		$this->load->view('layouts/footer');	
	}

	public function update(){
		$id = $this->input->post("idventa");
		$estado = $this->input->post("estado");


		$this->form_validation->set_rules("estado","Estado","required");
		if ($this->form_validation->run()){
    	$data = array(
    		'estado' => $estado
    	);


    	if ($this->Ventas_model->update($id,$data)){
    		redirect(base_url()."ventas/ventas");
    	}
    	else{
    		$this->session->set_flashdata("error", "No se puedo actualizar la informacion");
    		redirect(base_url()."ventas/ventas/edit".$id);
    	}
	}
		else {
			redirect(base_url()."ventas/ventas");
		}
	}

	public function view($id){
		$data = array(
			'venta' => $this->Ventas_model->getVenta($id),
		);

		$this->load->view("admin/ventas/view",$data);
	}

	#No es una eliminacion logica sino fisica.
	public function delete($id){
		if ($this->Ventas_model->delete($id)){
    		redirect(base_url()."ventas/ventas");
    	}
    	else{
    		$this->session->set_flashdata("error", "No se puedo guardar la informacion");
    		redirect(base_url()."ventas/ventas/add");
    	}
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
			"estado" => 1,
		);

		if ($this->Ventas_model->save($data)){
			$idventa = $this->Ventas_model->lastID();
			$this->updateComprobante($idcomprobante);
			$this->save_detalle($idproductos,$idventa,$cantidades,$precios,$importes);
			redirect(base_url()."ventas/ventas");
		}else{
			redirect(base_url(),"ventas/ventas/add");
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