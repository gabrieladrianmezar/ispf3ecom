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
		/*$this->load->view('admin/usuarios/add');*/
		$this->load->view('layouts/footer');	
    }

    public function store()
    {
    	$email = $this->input->post("email");
    	$password = $this->input->post("password");
        $nombre = $this->input->post("nombre");

    	$data = array(
    		'email' => $email,
    		'password' => sha1($password),
    		'nombre' => $nombre
    	);

    	if ($this->Usuariosadmin_model->save($data)){
    		redirect(base_url()."usuarios");
    	}
    	else{
    		$this->session->set_flashdata("error", "No se puedo guardar la informacion");
    		redirect(base_url()."usuarios/add");
    	}
	}

	public function edit($id){
		$data = array(
			'usuario' => $this->Usuariosadmin_model->getUsuario($id),
		);

		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/usuarios/edit',$data);
		$this->load->view('layouts/footer');	
	}

	public function update(){
		$id = $this->input->post("id");
		$email = $this->input->post("email");
		$password = $this->input->post("password");
        $nombre = $this->input->post("nombre");


    	$data = array(
    		'email' => $email,
    		'password' => sha1($password),
            'nombre' => $nombre
    	);

    	if ($this->Usuariosadmin_model->update($id,$data)){
    		redirect(base_url()."usuarios");
    	}
    	else{
    		$this->session->set_flashdata("error", "No se puedo actualizar la informacion");
    		redirect(base_url()."usuarios/edit".$id);
    	}
	}

	public function view($id){
		$data = array(
			'usuario' => $this->Usuariosadmin_model->getUsuario($id),
		);

		$this->load->view("admin/usuarios/view",$data);
	}
}