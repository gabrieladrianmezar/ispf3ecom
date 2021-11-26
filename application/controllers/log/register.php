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
		$this->load->view('layouts/aside2');
		$this->load->view('register/please');
		$this->load->view('layouts/footermain');	
    }

    public function create()
    {
    	$email = $this->input->post("email");	
    	$password = $this->input->post("password");
        $nombre = $this->input->post("nombre");
		$direccion = $this->input->post("direccion");
		$telefono = $this->input->post("telefono");
		$dni = $this->input->post("dni");
		
		$this->form_validation->set_rules("email","Email","required|is_unique[clientes.email]");
		$this->form_validation->set_rules("password","Password","required");
		$this->form_validation->set_rules("passwordconf","Password Confirmation","required|matches[password]");
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
				redirect(base_url()."log/clienteauth");
			}
			else{
				$this->session->set_flashdata("error", "No se puedo guardar la informacion");
				redirect(base_url()."log/register");
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

}
