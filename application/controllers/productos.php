<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	 public function __construct(){
		parent::__construct();
		$this->load->model("Productos_model");
	}

	public function index()
	{	
		$data = array(
			'productos' => $this->Productos_model->getProductos(),
		);	
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/productos/list',$data);
		$this->load->view('layouts/footer');
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
		$data = array(
			'nombre' => $nombre,
			'precio' => $precio,
			'stock' => $stock
		);

		$nombrerepetido = $this->Productos_model->doesNombreExist($nombre);
		if ($nombrerepetido != 0){
			$this->session->set_flashdata("error", "El nombre ingresado ya se encuentra registrado");
			redirect(base_url()."productos/add");
		};
		/*$datatwo =	 $this->Productos_model->doesEmailExist($nombre);
		$this->session->set_flashdata("error", $datatwo);
		$errormsg = $this->session->flashdata("error");
		echo $errormsg;
		exit;
		redirect(base_url()."productos/add");*/	

		#if ($this->Productos_model->doesEmailExist($nombre))

		#if ($nombre or $precio or $stock)	
		if (!in_array("", $data) and !in_array("da39a3ee5e6b4b0d3255bfef95601890afd80709", $data))
		{	
			#echo "empty nombre:", empty($nombre),",empty stock:", empty($stock), ",in array hash blank:", in_array("da39a3ee5e6b4b0d3255bfef95601890afd80709", $data), ",precio empty:",empty($precio);
			if ($this->Productos_model->save($data)){
				redirect(base_url()."productos");
			}
			else{
				$this->session->set_flashdata("error", "No se puedo guardar la informacion");
				redirect(base_url()."productos/add");
    		}
		}		
			else {
				$this->session->set_flashdata("error", "Todos los campos deben estar rellenados");
				redirect(base_url()."productos/add");
		}
	#}
	}

	public function edit($id){
		$data = array(
			'producto' => $this->Productos_model->getProducto($id),
		);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/productos/edit',$data);
		$this->load->view('layouts/footer');	
	}

	public function update(){
		$id = $this->input->post("id");
		$nombre = $this->input->post("nombre");
		$precio = $this->input->post("precio");
        $stock = $this->input->post("stock");
	


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

    	if ($this->Productos_model->update($id,$data)){
    		redirect(base_url()."productos");
    	}
    	else{
    		$this->session->set_flashdata("error", "No se puedo actualizar la informacion");
    		redirect(base_url()."productos/edit".$id);
    	}
		
	}

	public function view($id){
		$data = array(
			'producto' => $this->Productos_model->getProducto($id),
		);

		$this->load->view("admin/productos/view",$data);
	}

	#No es una eliminacion logica sino fisica.
	public function delete($id){
		/*$data  = array(
			'estado' => "0", 
		);
		$this->Categorias_model->update($id,$data);
		echo "mantenimiento/categorias";*/
		if ($this->Productos_model->delete($id)){
    		redirect(base_url()."productos");
    	}
    	else{
    		$this->session->set_flashdata("error", "No se puedo guardar la informacion");
    		redirect(base_url()."productos/add");
    	}
	}
}
