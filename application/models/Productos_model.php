<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_model extends CI_Model {

	public function getProductos(){
		/*$this->db->where("id",">1");*/
		$resultados = $this->db->get("productos");
		return $resultados->result();
	}

	public function doesNombreExist($nombre){
		/*$this->db->where("email",$email);
		$resultado = $this->db->get("productos");*/
		$this->db->select('*');	
		$this->db->like("nombre", $nombre);
		$this->db->from("productos");
		$resultado = $this->db->count_all_results();
		return $resultado;		
		}

	public function save($data){
		return $this->db->insert("productos",$data);
	}

	public function getProducto($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get("productos");		
		return $resultado->row();
	}

	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("productos",$data);
	}

	public function delete($id){
		$this->db->where("id",$id);
		return $this->db->delete("productos");
	}
} 