<?php 
session_start();
require_once 'model/usuarios_model/usuario_model.php';
require_once 'model/sensor_model/sensor_model.php';

date_default_timezone_set('UTC');

class usuarios_controller{
	private $model_u;
	private $model_s;

	function __construct(){
		$this->model_u = new usuario_model();
	}

	function home_usuarios(){
		$data = NULL;
		if(isset($_REQUEST['_id'])){
			$data = $this->model_u->obtenerId($_REQUEST['_id']);
		}
		$query = $this->model_u->get();
		require_once 'view/master_page/header_SU.php';
		require_once 'view/view_usuarios/seleccionar_usuarios.php';
		require_once 'view/master_page/footer.php';
	}

	function home_usuariosAD(){
		$data = NULL;
		if(isset($_REQUEST['_id'])){
			$data = $this->model_u->obtenerId($_REQUEST['_id']);
		}
		$query = $this->model_u->get();
		require_once 'view/master_page/header_AD.php';
		require_once 'view/view_usuarios/seleccionar_usuariosAD.php';
		require_once 'view/master_page/footer.php';
	}
	
	function usuarios(){
		$data = NULL;
		if(isset($_REQUEST['_id'])){
			$data = $this->model_u->obtenerId($_REQUEST['_id']);
		}
		$query = $this->model_u->get();

		require_once 'view/master_page/header_SU.php';
		require_once 'view/view_usuarios/insertar_usuarios.php';
		require_once 'view/master_page/footer.php';
	}

	function usuariosAD(){
		$data = NULL;
		if(isset($_REQUEST['_id'])){
			$data = $this->model_u->obtenerId($_REQUEST['_id']);
		}
		$query = $this->model_u->get();

		require_once 'view/master_page/header_AD.php';
		require_once 'view/view_usuarios/insertar_usuarios.php';
		require_once 'view/master_page/footer.php';
	}

	function insertar_usuarios(){

		$data['usr_rut'] = $_REQUEST['rut'];
		$data['usr_nombres'] = $_REQUEST['txt_nombres'];
		$data['usr_ape_paterno'] = $_REQUEST['txt_ape_paterno'];
		$data['usr_ape_materno'] = $_REQUEST['txt_ape_materno'];
		$data['usr_fecha'] = date('Y-m-d');
		$data['usr_tipo'] = $_REQUEST['txt_tipo'];
		$data['usr_passwd'] = $_REQUEST['txt_password'];

		$_id = $_REQUEST['txt_id'];
		$_id > 0 ? 
			$this->model_u->actualizar($data,$_id) : 
			 $this->model_u->agregar($data);
		
		header('Location: controlador.php?c=usuarios&a=home_usuarios');
	}


function insertar_usuariosAD(){

		$data['usr_rut'] = $_REQUEST['rut'];
		$data['usr_nombres'] = $_REQUEST['txt_nombres'];
		$data['usr_ape_paterno'] = $_REQUEST['txt_ape_paterno'];
		$data['usr_ape_materno'] = $_REQUEST['txt_ape_materno'];
		$data['usr_fecha'] = date();
		$data['usr_tipo'] = $_REQUEST['txt_tipo'];
		$data['usr_passwd'] = $_REQUEST['txt_password'];

		$_id = $_REQUEST['txt_id'];
		$_id > 0 ? 
			$this->model_u->actualizar($data,$_id) : 
			 $this->model_u->agregar($data);
		
		header('Location: controlador.php?c=usuarios&a=home_usuariosAD');
	}

	function borrarUsuario(){
		$_id = $_REQUEST['_id'];
		$this->model_u->borrar($_id);
		
		header('Location: controlador.php?c=usuarios&a=home_usuarios');
	}

	function borrarUsuarioAD(){
		$_id = $_REQUEST['_id'];
		$this->model_u->borrar($_id);
		
		header('Location: controlador.php?c=usuarios&a=home_usuariosAD');
	}

}
 ?>
