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
   $this->load->view('layouts/aside2');
   $this->load->view('products/product',$data);
   $this->load->view('layouts/footermain');
}

public function indexadd($id){
   $idp = $this->session->userdata("producto".strval($id));
   if($idp>=0){
   $this->session->set_userdata("producto".strval($id),$this->session->userdata("producto".strval($id))+1);
   //echo $this->session->userdata("producto".strval($producto));
   }else{
   };

   $data = array(
      'producto' => $this->Productos_model->getProducto($id),
   );	
   $this->load->view('layouts/headermain');
   $this->load->view('layouts/aside2');
   $this->load->view('products/product',$data);
   $this->load->view('layouts/footermain');
}

public function indexremove($id){
   $idp = $this->session->userdata("producto".strval($id));
   if($idp>0){
   $this->session->set_userdata("producto".strval($id),$this->session->userdata("producto".strval($id))-1);
   //echo $this->session->userdata("producto".strval($producto));
   }else{
   };

   $data = array(
      'producto' => $this->Productos_model->getProducto($id),
   );	
   $this->load->view('layouts/headermain');
   $this->load->view('layouts/aside2');
   $this->load->view('products/product',$data);
   $this->load->view('layouts/footermain');
}


}
?>
