<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClienteAuth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("Clienteslogin_model");
    }

    public function index()
    {
        /*Si esta logeado lo manda al dashboard de admin*/
		if ($this->session->userdata("login")){
			redirect(base_url()."main");
		}
		else{
		$this->load->view('admin/clientelogin');
		}
    }

    public function login()
	{
    	$email      = $this->input->post("email");
        $password   = $this->input->post("password");
        $res = $this->Clienteslogin_model->login($email, sha1($password));

        if(!$res) {
            $this->session->set_flashdata("error","El email y o contraseña son incorrectos");
            redirect(base_url());
        }
        else{
            $data = array(
                'idcliente' => $res->idcliente,
                'nombre' => $res->nombre,
                'login' => TRUE
            );
            $this->session->set_userdata($data);
            redirect(base_url()."main");
        }
        
	}   

    public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
