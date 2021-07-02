<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuariosadmin_model extends CI_Model {

	public function getUsuarios(){
		/*$this->db->where("idusuario",">1");*/
		$resultados = $this->db->get("usuarios");
		return $resultados->result();
	}

	public function save($data){
		return $this->db->insert("usuarios",$data);
	}

	public function getUsuario($idusuario){
		$this->db->where("idusuario",$idusuario);
		$resultado = $this->db->get("usuarios");		
		return $resultado->row();
	}

	public function update($idusuario,$data){
		$this->db->where("idusuario",$idusuario);
		return $this->db->update("usuarios",$data);
	}

	public function delete($idusuario){
		$this->db->where("idusuario",$idusuario);
		return $this->db->delete("usuarios");
	}
} 