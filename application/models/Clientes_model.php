<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model {

	public function getClientes(){
		$this->db->where("estado","1");
		$resultados = $this->db->get("clientes");
		return $resultados->result();
	}

	public function save($data){
		return $this->db->insert("clientes",$data);
	}

	public function getCliente($idcliente){
		$this->db->where("idcliente",$idcliente);
		$resultado = $this->db->get("clientes");		
		return $resultado->row();
	}

	public function update($idcliente,$data){
		$this->db->where("idcliente",$idcliente);
		return $this->db->update("clientes",$data);
	}

	public function delete($idcliente){
		$this->db->where("idcliente",$idcliente);
		return $this->db->delete("clientes");
	}
} 