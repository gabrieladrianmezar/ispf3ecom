<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nootropic extends CI_Controller {

	 public function __construct(){
		parent::__construct();
		$this->load->model("Productos_model");
	}

	public function index()
	{	
		$data = array(
			'producto' => $this->Productos_model->getProducto(2),
		);	
		$this->load->view('layouts/headermain');
		$this->load->view('products/nootropic',$data);
		$this->load->view('layouts/footermain');
	}

	public function add()
    {
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/productos/add');
		$this->load->view('layouts/footer');	
    }

    public function store()
    {
		/*
		if (!isset($_POST["nombre"]) || !isset($_POST["precio"]) || !isset($_POST["stock"]))
		{
   			 $msg_to_user = '<h1>Fill out the forms</h1>';
		}		else {*/
    	$nombre = $this->input->post("nombre");	
		/*if (empty($nombre)){
			$this->session->set_flashdata("error", "Rellene el campo nombre");
			redirect(base_url()."productos/add");
		}*/
    	$precio = $this->input->post("precio");
		/*if (empty($precio)){	
			$this->session->set_flashdata("error", "Rellene el campo contraseña");
			redirect(base_url()."productos/add");
		}*/
        $stock = $this->input->post("stock");
		/*if ($stock = ""){
			$this->session->set_flashdata("error", "Rellene el campo stock");
			redirect(base_url()."productos/add");
		}*/
		
		$this->form_validation->set_rules("nombre","Nombre","required|is_unique[productos.nombre]");
		$this->form_validation->set_rules("precio","Precio","required");
		$this->form_validation->set_rules("stock","Stock","required");
		if ($this->form_validation->run()){
		$data = array(
			'nombre' => $nombre,
			'precio' => $precio,
			'stock' => $stock
		);

		/*$nombrerepetido = $this->Productos_model->doesNombreExist($nombre);
		if ($nombrerepetido != 0){
			$this->session->set_flashdata("error", "El nombre ingresado ya se encuentra registrado");
			redirect(base_url()."productos/add");
		};*/

		#if ($nombre or $precio or $stock)	
		/*if (!in_array("", $data) and !in_array("da39a3ee5e6b4b0d3255bfef95601890afd80709", $data))
		{*/	
			#echo "empty nombre:", empty($nombre),",empty stock:", empty($stock), ",in array hash blank:", in_array("da39a3ee5e6b4b0d3255bfef95601890afd80709", $data), ",precio empty:",empty($precio);
			if ($this->Productos_model->save($data)){
				redirect(base_url()."productos");
			}
			else{
				$this->session->set_flashdata("error", "No se puedo guardar la informacion");
				redirect(base_url()."productos/add");
    		}
		/*}		
			else {
				$this->session->set_flashdata("error", "Todos los campos deben estar rellenados");
				redirect(base_url()."productos/add");
		}*/
	}
	else {
		$this->add();
	}
	#}
	}

	public function edit($idproducto){
		$data = array(
			'producto' => $this->Productos_model->getProducto($idproducto),
		);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/productos/edit',$data);
		$this->load->view('layouts/footer');	
	}

	public function update(){
		$idproducto = $this->input->post("idproducto");
		$nombre = $this->input->post("nombre");
		$precio = $this->input->post("precio");
        $stock = $this->input->post("stock");
	
		$productoActual = $this->Productos_model->getProductos($idproducto);

		if ($nombre == $productoActual->nombre) {
			$unique = '';
		 }
		 else{
			$unique = '|is_unique[productos.nombre]';
		}

		$this->form_validation->set_rules("nombre","Nombre","required".$unique);
		$this->form_validation->set_rules("precio","Precio","required");
		$this->form_validation->set_rules("stock","Stock","required");
		if ($this->form_validation->run()){
    	$data = array(
    		'nombre' => $nombre,
    		'precio' => $precio,
            'stock' => $stock
    	);

		/*$nombrerepetido = $this->Productos_model->doesNombreExist($nombre);
		if ($nombrerepetido != 0){
			$this->session->set_flashdata("error", "El nombre ingresado ya se encuentra registrado");
			redirect(base_url()."productos/edit");
		};*/

    	if ($this->Productos_model->update($idproducto,$data)){
    		redirect(base_url()."productos");
    	}
    	else{
    		$this->session->set_flashdata("error", "No se puedo actualizar la informacion");
    		redirect(base_url()."productos/edit".$idproducto);
    	}
	}
		else {
			$this->edit($idproducto);
		}
	}

	public function view($idproducto){
		$data = array(
			'producto' => $this->Productos_model->getProducto($idproducto),
		);

		$this->load->view("admin/productos/view",$data);
	}

	#No es una eliminacion logica sino fisica.
	public function delete($idproducto){
		/*$data  = array(
			'estado' => "0", 
		);
		$this->Categorias_model->update($idproducto,$data);
		echo "mantenimiento/categorias";*/
		if ($this->Productos_model->delete($idproducto)){
    		redirect(base_url()."productos");
    	}
    	else{
    		$this->session->set_flashdata("error", "No se puedo guardar la informacion");
    		redirect(base_url()."productos/add");
    	}
	}
}
