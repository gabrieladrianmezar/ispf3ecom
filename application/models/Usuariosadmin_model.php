<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuariosadmin_model extends CI_Model {

	public function getUsuarios(){
		/*$this->db->where("id",">1");*/
		$resultados = $this->db->get("usuarios");
		return $resultados->result();
	}

	public function doesEmailExist($email){
		/*$this->db->where("email",$email);
		$resultado = $this->db->get("usuarios");*/
		$this->db->select('*');	
		$this->db->like("email", $email);
		$this->db->from("usuarios");
		$resultado = $this->db->count_all_results();
		return $resultado;		
		}

	public function save($data){
		return $this->db->insert("usuarios",$data);
	}

	public function getUsuario($id){
		$this->db->where("id",$id);
		$resultado = $this->db->get("usuarios");		
		return $resultado->row();
	}

	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("usuarios",$data);
	}

	public function delete($id){
		$this->db->where("id",$id);
		return $this->db->delete("usuarios");
	}
} 