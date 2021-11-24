<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas_model extends CI_Model {

	public function getVentas(){
		$this->db->where("estado > 0");
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

	public function getVentaJoined($idventa){
		$this->db->select("v.idventa, v.idcliente, v.fecha, v.subtotal, v.iva, v.descuento, v.idtipocomprobante, v.idusuario, v.numerodocumento, v.serie, v.estado, v.total, c.nombre, c.direccion, c.telefono, c.dni, tc.nombre as tipocomprobanteA");
		$this->db->from("ventas v");
		$this->db->join("clientes c", "v.idcliente = c.idcliente");
		$this->db->join("tipocomprobante tc", "v.idtipocomprobante = tc.id");
		$this->db->where("v.idventa",$idventa);
		/*$this->db->query("SELECT ventas.idventa, ventas.idcliente, ventas.fecha, ventas.subtotal, ventas.iva, ventas.descuento,ventas.idtipocomprobante, ventas.idusuario, ventas.numerodocumento, ventas.serie, ventas.estado, ventas.total, clientes.nombre, clientes.direccion, clientes.telefono, clientes.dni, tipocomprobante.nombre FROM ventas JOIN clientes ON ventas.idcliente=clientes.idcliente JOIN tipocomprobante ON ventas.idtipocomprobante=tipocomprobante.id; WHERE ventas.idventa");*/
		$resultado = $this->db->get();		
		return $resultado->row();
	}

	public function getDetalle($idventa){
		/*$this->db->select("dt.id, dt.idproducto, dt.idventa, dt.cantidad, dt.precio, dt.subtotal, pr.idproducto, pr.nombre");
		$this->db->from(" detalleventas dt");
		$this->db->join(" productos pr", " dt.idproducto = pr.idproducto");
		$this->db->where("dt.idventa",$idventa);*/
		$this->db->select("detalleventas.id, detalleventas.idproducto, detalleventas.idventa, detalleventas.cantidad, detalleventas.precio, detalleventas.subtotal, productos.idproducto, productos.nombre");
		$this->db->from("detalleventas");
		$this->db->join("productos", "detalleventas.idproducto = productos.idproducto");
		$this->db->where("detalleventas.idventa",$idventa);
		$resultados = $this->db->get();
		return $resultados->result();
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

	public function years(){
		$this->db->select("YEAR(fecha) as year");
		$this->db->from("ventas");
		$this->db->group_by("year");
		$this->db->order_by("year","desc");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function montos($year){
		$this->db->select("MONTH(fecha) as mes, SUM(total) as monto");
		$this->db->from("ventas");
		$this->db->where("fecha >=",$year."-01-01");
		$this->db->where("fecha <=",$year."-12-31");
		$this->db->where("ventas.estado = 3");
		$this->db->group_by("mes");
		$this->db->order_By("mes");
		$resultados = $this->db->get();
		return $resultados->result();
	}
} 