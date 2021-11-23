<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos extends CI_Controller {

    private $permisos;
 	public function __construct(){
		parent::__construct();
        $this->permisos = $this->backend_lib->control();
		$this->load->model("Permisos_model");
        $this->load->model("Usuarios_model");
	}

	public function index(){	
        $data = array(
            'permisosP' => $this->permisos,
            'permisos' => $this->Permisos_model->getPermisos(),
        );
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/permisos/list',$data);
		$this->load->view('layouts/footer');
	}

	public function add()
    {
        $data = array(
            'roles' => $this->Usuarios_model->getRoles(),
            'menus' => $this->Permisos_model->getMenus(),
        );
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/permisos/add',$data);
		$this->load->view('layouts/footer');	
    }

    public function store(){
        $menu = $this->input->post("menu");
        $rol = $this->input->post("rol");
        $insert = $this->input->post("insert");
        $read = $this->input->post("read");
        $update = $this->input->post("update");
        $delete = $this->input->post("delete");

        $data = array(
            "idmenu" => $menu,
            "idrol" => $rol,
            "insert" => $insert,
            "read" => $read,
            "update" => $update,
            "delete" => $delete
        );

        if ($this->Permisos_model->save($data)){
            redirect(base_url()."sysadmin/permisos");
        } else {
            $this->session->set_flashdata("error", "No se pudo guardar la informacion");
            redirect(base_url()."sysadmin/permisos/add");
        }

    }

    public function edit($id){
        $data = array(
            'roles' => $this->Usuarios_model->getRoles(),
            'menus' => $this->Permisos_model->getMenus(),
            'permiso' => $this->Permisos_model->getPermiso($id)
        );
        $this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/permisos/edit',$data);
		$this->load->view('layouts/footer');	

    }

    public function update(){
        $idpermiso = $this->input->post("idpermiso");
        $menu = $this->input->post("menu");
        $rol = $this->input->post("rol");
        $insert = $this->input->post("insert");
        $read = $this->input->post("read");
        $update = $this->input->post("update");
        $delete = $this->input->post("delete");

        $data = array(
            "insert" => $insert,
            "read" => $read,
            "update" => $update,
            "delete" => $delete
        );

    	if ($this->Permisos_model->update($idpermiso,$data)){
    		redirect(base_url()."sysadmin/permisos");
    	}
            else{
                $this->session->set_flashdata("error", "No se puedo actualizar la informacion");
                redirect(base_url()."sysadmin/permisos/edit".$idpermiso);
            }
		}

	public function view($idpermiso){
		$data = array(
			'permiso' => $this->Productos_model->getPermiso($idpermiso),
		);

		$this->load->view("admin/permisos/view",$data);
	}

    public function delete($idpermiso){
		if ($this->Permisos_model->delete($idpermiso)){
    		redirect(base_url()."sysadmin/permisos/");
    	}
    	else{
    		$this->session->set_flashdata("error", "No se puedo guardar la informacion");
    		redirect(base_url()."sysadmin/permisos/");
    	}
	}
}