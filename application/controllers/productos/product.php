<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

public function __construct(){
   parent::__construct();
   $this->load->model("Productos_model");
}

public function index($idproducto)
{	
   $data = array(
       'producto' => $this->Productos_model->getProducto($idproducto),
   );	
   $this->load->view('layouts/headermain');
   $this->load->view('products/product',$data);
   $this->load->view('layouts/footermain');
}

public function indexadd($idproducto){
   $producto = $this->input->post("add");
   $this->session->set_userdata("producto".strval($producto),$this->session->userdata("producto".strval($producto))+1);
   //echo $this->session->userdata("producto".strval($producto));

   $data = array(
      'producto' => $this->Productos_model->getProducto($idproducto),
   );	
   $this->load->view('layouts/headermain');
   $this->load->view('products/product',$data);
   $this->load->view('layouts/footermain');
}

}
?>