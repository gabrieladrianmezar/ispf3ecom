<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	 private $permisos;
	 public function __construct(){
		parent::__construct();
		$this->permisos = $this->backend_lib->control();
		$this->load->model("Clientes_model");
	}

	public function index()
	{	
		$data = array(
			'permisos' => $this->permisos,
			'clientes' => $this->Clientes_model->getClientes(),
		);	
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/clientes/list',$data);
		$this->load->view('layouts/footer');
	}

	public function add()
    {
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/clientes/add');
		$this->load->view('layouts/footer');	
    }

    public function store()
    {
    	$email = $this->input->post("email");	
    	$password = $this->input->post("password");
        $nombre = $this->input->post("nombre");
		$direccion = $this->input->post("direccion");
		$telefono = $this->input->post("telefono");
		$dni = $this->input->post("dni");
		
		$this->form_validation->set_rules("email","Email","required|is_unique[clientes.email]");
		$this->form_validation->set_rules("password","Password","required");
		$this->form_validation->set_rules("nombre","Nombre","required|min_length[1]|max_length[30]|is_unique[clientes.nombre]");
		$this->form_validation->set_rules("direccion","Direccion","required");
		$this->form_validation->set_rules("telefono","Telefono","required|min_length[11]|max_length[15]");
		$this->form_validation->set_rules("dni","Dni","required|min_length[1]|max_length[18]|is_unique[clientes.dni]");
		if ($this->form_validation->run()){
				$data = array(
					'email' => $email,
					'password' => sha1($password),
					'nombre' => $nombre,
					'estado' => 1,
					'direccion' => $direccion,
					'telefono' => $telefono,
					'dni' => $dni,
				); 	


			if ($this->Clientes_model->save($data)){
				redirect(base_url()."clientes/clientes");
			}
			else{
				$this->session->set_flashdata("error", "No se puedo guardar la informacion");
				redirect(base_url()."clientes/clientes/add");
    		}
	}
	else {
		$this->add();
	}
	#}
	}

	public function edit($idcliente){
		$data = array(
			'cliente' => $this->Clientes_model->getCliente($idcliente),
		);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/clientes/edit',$data);
		$this->load->view('layouts/footer');	
	}

	public function update(){
		$idcliente = $this->input->post("idcliente");
    	$email = $this->input->post("email");	
        $nombre = $this->input->post("nombre");
		$direccion = $this->input->post("direccion");
		$telefono = $this->input->post("telefono");
		$dni = $this->input->post("dni");
	
		$clienteActual = $this->Clientes_model->getCliente($idcliente);

		if ($email == $clienteActual->email) {
			$unique = '';
		 }
		 else{
			$unique = '|is_unique[clientes.email]';
		}

		if ($nombre == $clienteActual->nombre){
			$unique2 = '';
		}
		else {$unique2 = '|is_unique[clientes.nombre]';
		}

		if ($dni == $clienteActual->dni){
			$unique3 = '';
		}
		else {$unique3 = '|is_unique[clientes.dni]';
		}
		
		$this->form_validation->set_rules("email","Email","required".$unique);
		$this->form_validation->set_rules("nombre","Nombre","required|min_length[1]|max_length[30]".$unique2);
		$this->form_validation->set_rules("direccion","Direccion","required");
		$this->form_validation->set_rules("telefono","Telefono","required");
		$this->form_validation->set_rules("dni","Dni","required|min_length[1]|max_length[9]".$unique3);
		if ($this->form_validation->run()){
    	$data = array(
    		'email' => $email,
            'nombre' => $nombre,
			'direccion' => $direccion,
			'telefono' => $telefono,
			'dni' => $dni
    	);

    	if ($this->Clientes_model->update($idcliente,$data)){
    		redirect(base_url()."clientes/clientes");
    	}
    	else{
    		$this->session->set_flashdata("error", "No se puedo actualizar la informacion");
    		redirect(base_url()."clientes/clientes/edit".$idcliente);
    	}
	}
		else {
			$this->edit($idcliente);
		}
	}

	public function view($idcliente){
		$data = array(
			'cliente' => $this->Clientes_model->getCliente($idcliente),
		);

		$this->load->view("admin/clientes/view",$data);
	}


	public function delete($idcliente){
		$data  = array(
			'estado' => "0", 
		);
		if ($this->Clientes_model->update($idcliente,$data)){
    		redirect(base_url()."clientes/clientes");
    	} else {
			$this->session->set_flashdata("error", "No se puedo guardar la informacion");
			redirect(base_url()."clientes/clientes");
		}
	}
}
