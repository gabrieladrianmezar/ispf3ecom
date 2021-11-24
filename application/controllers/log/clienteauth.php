<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClienteAuth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("Login_model");
        $this->load->model("Productos_model");
    }

    public function index()
    {
        $data = array(
			'productos' => $this->Productos_model->getProductos(),
		);	
        /*Si esta logeado lo manda al dashboard de admin*/
		if ($this->session->userdata("login")){
			redirect(base_url()."main");
		}
		else{
		$this->load->view('login/clientelogin',$data);
		}
    }

    public function login()
	{
    	$email = $this->input->post("email");
        $password = $this->input->post("password");
        $res = $this->Login_model->clientelogin($email, sha1($password));

        $productosinput = $this->input->post("productosinput");
        $productos = explode(",",$productosinput);
        $cantidad = count($productos)-1;

        if(!$res) {
            $this->session->set_flashdata("error","El email y o contraseña son incorrectos");
            redirect(base_url());
        }
        else{
            $data = array(
                'idcliente' => $res->idcliente,
                'nombre' => $res->nombre,
                'login' => TRUE,
            );
            for ($i = 0; $i<$cantidad ; $i++) {
                $data["producto".strval($productos[$i])] = 0;
            };
            $data['productos'] = $cantidad;
            //print_r($data);
            $this->session->set_userdata($data);
            //print_r($this->session->userdata());
            redirect(base_url()."main");
        }
        
	}   

    public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
