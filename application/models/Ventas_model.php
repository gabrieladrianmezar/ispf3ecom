<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas_model extends CI_Model {

	public function getVentas(){
		/*$this->db->where("idventa",">1");*/
		$resultados = $this->db->get("ventas");
		return $resultados->result();
	}

	/*public function doesEmailExist($email){
		/*$this->db->where("email",$email);
		$resultado = $this->db->get("ventas");*//*
		$this->db->select('*');	
		$this->db->like("email", $email);
		$this->db->from("ventas");
		$resultado = $this->db->count_all_results();
		return $resultado;		
		}*/

	public function save($data){
		return $this->db->insert("ventas",$data);
	}

	public function getVenta($idventa){
		$this->db->where("idventa",$idventa);
		$resultado = $this->db->get("ventas");		
		return $resultado->row();
	}

	public function update($idventa,$data){
		$this->db->where("idventa",$idventa);
		return $this->db->update("ventas",$data);
	}

	public function delete($idventa){
		$this->db->where("idventa",$idventa);
		return $this->db->delete("ventas");
	}
} 