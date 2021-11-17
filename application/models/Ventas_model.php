<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas_model extends CI_Model {

	public function getVentas(){
		/*$this->db->where("idventa",">1");*/
		$resultados = $this->db->get("ventas");
		return $resultados->result();
	}

	public function getComprobante($idcomprobante){
		$this->db->where("id",$idcomprobante);
		$resultado = $this->db->get("tipocomprobante");
		return $resultado->result();
	}
	public function getComprobantes(){
		$resultados = $this->db->get("tipocomprobante");
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

	public function getProductosDB($valor){	
		$this->db->select("idproducto,nombre as label,precio,stock");
		$this->db->from("productos");
		$this->db->like("nombre",$valor);
		$resultados = $this->db->get();
		return $resultados->result_array();
	}

	public function lastID(){
		return $this->db->insert_id();
	}

	public function updateComprobante($idcomprobante,$data){
		$this->db->where("id",$idcomprobante);
		$this->db->update("tipocomprobante",$data);
	}

	public function saveDetalle($data){
		return $this->db->insert("detalleventas",$data);
	}
} 