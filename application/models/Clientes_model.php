<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model {

	public function getClientes(){
		/*$this->db->where("id",">1");*/
		$resultados = $this->db->get("clientes");
		return $resultados->result();
	}

	public function doesEmailExist($email){
		/*$this->db->where("email",$email);
		$resultado = $this->db->get("clientes");*/
		$this->db->select('*');	
		$this->db->like("email", $email);
		$this->db->from("clientes");
		$resultado = $this->db->count_all_results();
		return $resultado;		
		}

	public function save($data){
		return $this->db->insert("clientes",$data);
	}

	public function getCliente($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get("clientes");		
		return $resultado->row();
	}

	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("clientes",$data);
	}

	public function delete($id){
		$this->db->where("id",$id);
		return $this->db->delete("clientes");
	}
} 