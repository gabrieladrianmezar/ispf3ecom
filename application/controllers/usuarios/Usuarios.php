<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	private $permisos;
	 public function __construct(){
		parent::__construct();
		$this->permisos = $this->backend_lib->control();
		$this->load->model("Usuarios_model");
	}

	public function index()
	{	
		$data = array(
			'permisos' => $this->permisos,
			'usuarios' => $this->Usuarios_model->getUsuarios(),
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
    	$email = $this->input->post("email");	
    	$password = $this->input->post("password");
        $nombre = $this->input->post("nombre");
		$rol = $this->input->post("rol");

		$this->form_validation->set_rules("email","Email","required|is_unique[usuarios.email]");
		$this->form_validation->set_rules("password","Password","required");
		$this->form_validation->set_rules("nombre","Nombre","required");
		$this->form_validation->set_rules("rol","Rol","required");
		if ($this->form_validation->run()){
		$data = array(
			'email' => $email,
			'password' => sha1($password),
			'nombre' => $nombre,
			'estado' => 1,
			'idrol' => $rol
		);

			if ($this->Usuarios_model->save($data)){
				redirect(base_url()."usuarios/usuarios");
			}
			else{
				$this->session->set_flashdata("error", "No se puedo guardar la informacion");
				redirect(base_url()."usuarios/usuarios/add");
    		}

	}
	else {
		$this->add();
	}
	#}
	}

	public function edit($idusuario){
		$data = array(
			'usuario' => $this->Usuarios_model->getUsuario($idusuario),
		);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/usuarios/edit',$data);
		$this->load->view('layouts/footer');	
	}

	public function update(){
		$idusuario = $this->input->post("idusuario");
		$email = $this->input->post("email");
        $nombre = $this->input->post("nombre");
		$idrol = $this->input->post("idrol");
	
		$usuarioActual = $this->Usuarios_model->getUsuario($idusuario);

		if ($email == $usuarioActual->email) {
			$unique = '';
		 }
		 else{
			$unique = '|is_unique[usuarios.email]';
		}

		$this->form_validation->set_rules("email","Email","required".$unique);
		$this->form_validation->set_rules("nombre","Nombre","required");
		$this->form_validation->set_rules("idrol","ID Rol","required");
		if ($this->form_validation->run()){
    	$data = array(
    		'email' => $email,
            'nombre' => $nombre,
			'idrol' => $idrol
    	);

    	if ($this->Usuarios_model->update($idusuario,$data)){
    		redirect(base_url()."usuarios/usuarios");
    	}
    	else{
    		$this->session->set_flashdata("error", "No se puedo actualizar la informacion");
    		redirect(base_url()."usuarios/usuarios/edit".$idusuario);
    	}
	}
		else {
			$this->edit($idusuario);
		}
	}

	public function view($idusuario){
		$data = array(
			'usuario' => $this->Usuarios_model->getUsuario($idusuario),
		);

		$this->load->view("admin/usuarios/view",$data);
	}

	public function delete($idusuario){
		$data  = array(
			'estado' => "0", 
		);
		if ($this->Usuarios_model->update($idusuario,$data)){
    		redirect(base_url()."usuarios/usuarios");
    	} else {
			$this->session->set_flashdata("error", "No se puedo guardar la informacion");
			redirect(base_url()."usuarios/usuarios");
		}
	}
}
