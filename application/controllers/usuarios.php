<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	 public function __construct(){
		parent::__construct();
		$this->load->model("Usuariosadmin_model");
	}

	public function index()
	{	
		$data = array(
			'usuarios' => $this->Usuariosadmin_model->getUsuarios(),
		);	
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/usuarios/list',$data);
		$this->load->view('layouts/footer');
	}

	public function add()
    {
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/usuarios/add');
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
			redirect(base_url()."usuarios/add");
		}*/
    	$password = $this->input->post("password");
		/*if (empty($password)){	
			$this->session->set_flashdata("error", "Rellene el campo contraseña");
			redirect(base_url()."usuarios/add");
		}*/
        $nombre = $this->input->post("nombre");
		/*if ($nombre = ""){
			$this->session->set_flashdata("error", "Rellene el campo nombre");
			redirect(base_url()."usuarios/add");
		}*/
		
		$this->form_validation->set_rules("email","Email","required|is_unique[usuarios.email]");
		$this->form_validation->set_rules("password","Password","required");
		$this->form_validation->set_rules("nombre","Nombre","required");
		if ($this->form_validation->run()){
		$data = array(
			'email' => $email,
			'password' => sha1($password),
			'nombre' => $nombre
		);

		/*$emailrepetido = $this->Usuariosadmin_model->doesEmailExist($email);
		if ($emailrepetido != 0){
			$this->session->set_flashdata("error", "El email ingresado ya se encuentra registrado");
			redirect(base_url()."usuarios/add");
		};*/

		#if ($email or $password or $nombre)	
		/*if (!in_array("", $data) and !in_array("da39a3ee5e6b4b0d3255bfef95601890afd80709", $data))
		{*/	
			#echo "empty email:", empty($email),",empty nombre:", empty($nombre), ",in array hash blank:", in_array("da39a3ee5e6b4b0d3255bfef95601890afd80709", $data), ",password empty:",empty($password);
			if ($this->Usuariosadmin_model->save($data)){
				redirect(base_url()."usuarios");
			}
			else{
				$this->session->set_flashdata("error", "No se puedo guardar la informacion");
				redirect(base_url()."usuarios/add");
    		}
		/*}		
			else {
				$this->session->set_flashdata("error", "Todos los campos deben estar rellenados");
				redirect(base_url()."usuarios/add");
		}*/
	}
	else {
		$this->add();
	}
	#}
	}

	public function edit($idusuario){
		$data = array(
			'usuario' => $this->Usuariosadmin_model->getUsuario($idusuario),
		);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/usuarios/edit',$data);
		$this->load->view('layouts/footer');	
	}

	public function update(){
		$idusuario = $this->input->post("idusuario");
		$email = $this->input->post("email");
		$password = $this->input->post("password");
        $nombre = $this->input->post("nombre");
	
		$usuarioActual = $this->Usuariosadmin_model->getUsuario($idusuario);

		if ($email == $usuarioActual->email) {
			$unique = '';
		 }
		 else{
			$unique = '|is_unique[usuarios.email]';
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

		/*$emailrepetido = $this->Usuariosadmin_model->doesEmailExist($email);
		if ($emailrepetido != 0){
			$this->session->set_flashdata("error", "El email ingresado ya se encuentra registrado");
			redirect(base_url()."usuarios/edit");
		};*/

    	if ($this->Usuariosadmin_model->update($idusuario,$data)){
    		redirect(base_url()."usuarios");
    	}
    	else{
    		$this->session->set_flashdata("error", "No se puedo actualizar la informacion");
    		redirect(base_url()."usuarios/edit".$idusuario);
    	}
	}
		else {
			$this->edit($idusuario);
		}
	}

	public function view($idusuario){
		$data = array(
			'usuario' => $this->Usuariosadmin_model->getUsuario($idusuario),
		);

		$this->load->view("admin/usuarios/view",$data);
	}

	#No es una eliminacion logica sino fisica.
	public function delete($idusuario){
		/*$data  = array(
			'estado' => "0", 
		);
		$this->Categorias_model->update($idusuario,$data);
		echo "mantenimiento/categorias";*/
		if ($this->Usuariosadmin_model->delete($idusuario)){
    		redirect(base_url()."usuarios");
    	}
    	else{
    		$this->session->set_flashdata("error", "No se puedo guardar la informacion");
    		redirect(base_url()."usuarios/add");
    	}
	}
}
