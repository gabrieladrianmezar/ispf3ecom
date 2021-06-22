<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("Usuarios_Model");
    }

    public function index()
    {
        $this->load->view("admin/login");
    }

    public function login()
	{
    	$email      = $this->input->post("email");
        $password   = $this->input->post("password");
        $res = $this->Usuarios_Model->login($email, sha1($password));

        if(!$res) {
            $this->session->set_flashdata("error","El email y o contraseña son incorrectos");
            redirect(base_url());
        }
        else{
            $data = array(
                'id' => $res->id,
                'nombre' => $res->nombre,
                'login' => TRUE
            );
            $this->session->set_userdata($data);
            redirect(base_url()."dashboard");
        }
	}   

    public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
