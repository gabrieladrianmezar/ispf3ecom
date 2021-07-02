<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_model extends CI_Model {

	public function getProductos(){
		/*$this->db->where("idproducto",">1");*/
		$resultados = $this->db->get("productos");
		return $resultados->result();
	}

	public function save($data){
		return $this->db->insert("productos",$data);
	}

	public function getProducto($idproducto){
		$this->db->where("idproducto",$idproducto);
		$resultado = $this->db->get("productos");		
		return $resultado->row();
	}

	public function update($idproducto,$data){
		$this->db->where("idproducto",$idproducto);
		return $this->db->update("productos",$data);
	}

	public function delete($idproducto){
		$this->db->where("idproducto",$idproducto);
		return $this->db->delete("productos");
	}
} 