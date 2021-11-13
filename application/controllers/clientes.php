<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	 public function __construct(){
		parent::__construct();
		$this->load->model("Clientes_model");
	}

	public function index()
	{	
		$data = array(
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
		/*
		if (!isset($_POST["email"]) || !isset($_POST["password"]) || !isset($_POST["nombre"]))
		{
   			 $msg_to_user = '<h1>Fill out the forms</h1>';
		}		else {*/
    	$email = $this->input->post("email");	
		/*if (empty($email)){
			$this->session->set_flashdata("error", "Rellene el campo email");
			redirect(base_url()."clientes/add");
		}*/
    	$password = $this->input->post("password");
		/*if (empty($password)){	
			$this->session->set_flashdata("error", "Rellene el campo contraseña");
			redirect(base_url()."clientes/add");
		}*/
        $nombre = $this->input->post("nombre");
		/*if ($nombre = ""){
			$this->session->set_flashdata("error", "Rellene el campo nombre");
			redirect(base_url()."clientes/add");
		}*/
		
		$this->form_validation->set_rules("email","Email","required|is_unique[clientes.email]");
		$this->form_validation->set_rules("password","Password","required");
		$this->form_validation->set_rules("nombre","Nombre","required");
		if ($this->form_validation->run()){
		$data = array(
			'email' => $email,
			'password' => sha1($password),
			'nombre' => $nombre
		);

		/*$emailrepetido = $this->Clientes_model->doesEmailExist($email);
		if ($emailrepetido != 0){
			$this->session->set_flashdata("error", "El email ingresado ya se encuentra registrado");
			redirect(base_url()."clientes/add");
		};*/

		#if ($email or $password or $nombre)	
		/*if (!in_array("", $data) and !in_array("da39a3ee5e6b4b0d3255bfef95601890afd80709", $data))
		{*/	
			#echo "empty email:", empty($email),",empty nombre:", empty($nombre), ",in array hash blank:", in_array("da39a3ee5e6b4b0d3255bfef95601890afd80709", $data), ",password empty:",empty($password);
			if ($this->Clientes_model->save($data)){
				redirect(base_url()."clientes");
			}
			else{
				$this->session->set_flashdata("error", "No se puedo guardar la informacion");
				redirect(base_url()."clientes/add");
    		}
		/*}		
			else {
				$this->session->set_flashdata("error", "Todos los campos deben estar rellenados");
				redirect(base_url()."clientes/add");
		}*/
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
		$password = $this->input->post("password");
        $nombre = $this->input->post("nombre");
	
		$clienteActual = $this->Clientes_model->getCliente($idcliente);

		if ($email == $clienteActual->email) {
			$unique = '';
		 }
		 else{
			$unique = '|is_unique[clientes.email]';
		}

		$this->form_validation->set_rules("email","Email","required".$unique);
		$this->form_validation->set_rules("password","Password","required");
		$this->form_validation->set_rules("nombre","Nombre","required");
		if ($this->form_validation->run()){
    	$data = array(
    		'email' => $email,
    		'password' => $password,
            'nombre' => $nombre
    	);

		/*$emailrepetido = $this->Clientes_model->doesEmailExist($email);
		if ($emailrepetido != 0){
			$this->session->set_flashdata("error", "El email ingresado ya se encuentra registrado");
			redirect(base_url()."clientes/edit");
		};*/

    	if ($this->Clientes_model->update($idcliente,$data)){
    		redirect(base_url()."clientes");
    	}
    	else{
    		$this->session->set_flashdata("error", "No se puedo actualizar la informacion");
    		redirect(base_url()."clientes/edit".$idcliente);
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

	#No es una eliminacion logica sino fisica.
	public function delete($idcliente){
		/*$data  = array(
			'estado' => "0", 
		);
		$this->Categorias_model->update($idcliente,$data);
		echo "mantenimiento/categorias";*/
		if ($this->Clientes_model->delete($idcliente)){
    		redirect(base_url()."clientes");
    	}
    	else{
    		$this->session->set_flashdata("error", "No se puedo guardar la informacion");
    		redirect(base_url()."clientes/add");
    	}
	}
}