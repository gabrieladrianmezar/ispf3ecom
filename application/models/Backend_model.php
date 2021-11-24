<?php 
defined('BASEPATH') OR exit('No direct script accesss allowed');

class Backend_model extends CI_Model{
    public function getID($link){
        $this->db->like("link",$link);
        $resultado = $this->db->get("menus");
        return $resultado->row();
    }

    public function getPermisos($menu,$rol){
        $this->db->where("idmenu",$menu);
        $this->db->where("idrol",$rol);
        $resultado = $this->db->get("permisos");
        return $resultado->row();
    }

    public function rowCount($tabla){
        /*if ($tabla != "ventas"){
        $this->db->where("estado","1");
        }*/
        $resultados = $this->db->get($tabla);
        return $resultados->num_rows();
    }
    
}
?>