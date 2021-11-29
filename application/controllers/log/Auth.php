<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("Login_model");
    }

    public function index()
    {
        /*Si esta logeado lo manda al dashboard de admin*/
		if ($this->session->userdata("login")){
			redirect(base_url()."dashboard");
		}
		else{
		$this->load->view('login/login');
		}
    }

    public function login()
	{
    	$email      = $this->input->post("email");
        $password   = $this->input->post("password");
        $res = $this->Login_model->userlogin($email, sha1($password));

        if(!$res) {
            $this->session->set_flashdata("error","El email y o contraseña son incorrectos");
            redirect(base_url().'log/auth');
        }
        else{
            $data = array(
                'idusuario' => $res->idusuario,
                'nombre' => $res->nombre,
                'login' => TRUE,
                'rol' => $res->idrol
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
