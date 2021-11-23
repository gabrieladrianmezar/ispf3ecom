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
    	$email = $this->input->post("email");	
    	$password = $this->input->post("password");
        $nombre = $this->input->post("nombre");
		
		$this->form_validation->set_rules("email","Email","required|is_unique[clientes.email]");
		$this->form_validation->set_rules("password","Password","required");
		$this->form_validation->set_rules("passwordconf","Password Confirmation","required|matches[password]");
		$this->form_validation->set_rules("nombre","Nombre","required|min_length[5]|max_length[12]|is_unique[clientes.nombre]");
		if ($this->form_validation->run()){
		$data = array(
			'email' => $email,
			'password' => sha1($password),
			'nombre' => $nombre,
			'estado' => 1
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
}
