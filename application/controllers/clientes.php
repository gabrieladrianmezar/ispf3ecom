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
    	$email = $this->input->post("email");	
    	$password = $this->input->post("password");
        $nombre = $this->input->post("nombre");
		
		$this->form_validation->set_rules("email","Email","required|is_unique[clientes.email]");
		$this->form_validation->set_rules("password","Password","required");
		$this->form_validation->set_rules("nombre","Nombre","required");
		if ($this->form_validation->run()){
		$data = array(
			'email' => $email,
			'password' => sha1($password),
			'nombre' => $nombre
		);


			if ($this->Clientes_model->save($data)){
				redirect(base_url()."clientes");
			}
			else{
				$this->session->set_flashdata("error", "No se puedo guardar la informacion");
				redirect(base_url()."clientes/add");
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


	public function delete($idcliente){
		$data  = array(
			'estado' => "0", 
		);
		if ($this->Clientes_model->update($idcliente,$data)){
    		redirect(base_url()."clientes");
    	} else {
			$this->session->set_flashdata("error", "No se puedo guardar la informacion");
			redirect(base_url()."clientes");
		}
	}
}
