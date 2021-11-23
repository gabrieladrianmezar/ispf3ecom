<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	 public function __construct(){
		parent::__construct();
		$this->load->model("Clientes_model");
	}

	public function index()
	{	
		$this->load->view('register/registration');
	}

	public function please()
    {
		$this->load->view('layouts/headermain');
		$this->load->view('register/please');
		$this->load->view('layouts/footermain');	
    }

    public function create()
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
		$this->form_validation->set_rules("passwordconf","Password Confirmation","required|matches[password]");
		$this->form_validation->set_rules("nombre","Nombre","required|min_length[5]|max_length[12]|is_unique[clientes.nombre]");
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
		$this->index();
	}
	#}
	}

	public function success(){
		$this->load->view('register/success');	
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
