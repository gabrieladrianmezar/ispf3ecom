<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	private $permisos;
	 public function __construct(){
		parent::__construct();
		$this->permisos = $this->backend_lib->control();
		$this->load->model("Productos_model");
	}

	public function index()
	{	
		$data = array(
			'permisos' => $this->permisos,
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
    	$nombre = $this->input->post("nombre");	
    	$precio = $this->input->post("precio");
        $stock = $this->input->post("stock");
		
		$this->form_validation->set_rules("nombre","Nombre","required|is_unique[productos.nombre]");
		$this->form_validation->set_rules("precio","Precio","required");
		$this->form_validation->set_rules("stock","Stock","required");
		if ($this->form_validation->run()){
		$data = array(
			'nombre' => $nombre,
			'precio' => $precio,
			'stock' => $stock
		);

			if ($this->Productos_model->save($data)){
				redirect(base_url()."productos/productos");
			}
			else{
				$this->session->set_flashdata("error", "No se puedo guardar la informacion");
				redirect(base_url()."productosproductos/add");
    		}
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

    	if ($this->Productos_model->update($idproducto,$data)){
    		redirect(base_url()."productos/productos");
    	}
    	else{
    		$this->session->set_flashdata("error", "No se puedo actualizar la informacion");
    		redirect(base_url()."productos/productos/edit".$idproducto);
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
		$data  = array(
			'estado' => "0", 
		);
		if ($this->Productos_model->update($idproducto,$data)){
    		redirect(base_url()."productos/productos");
    	} else {
    		$this->session->set_flashdata("error", "No se puedo guardar la informacion");
    		redirect(base_url()."productos/productos");
		}
	}
}
