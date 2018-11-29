<?php 
session_start();
require_once 'model/sensor_model/sensor_model.php';
require_once 'model/usuarios_model/usuario_model.php';

class home_controller{
	private $model_s;
	private $model_u;

	function __construct(){
		$this->model_s = new sensor_model();
	}

	function index(){


			$query = $this->model_s->obtener();
			$query2 = $this->model_s->obtener2();
			$query3 = $this->model_s->obtener3();
			require_once 'view/master_page/header.php';
			require_once 'view/master_page/index.php';
			require_once 'view/master_page/footer.php';
		
	}

	function indexSU(){
			$query = $this->model_s->obtener();
			$query2 = $this->model_s->obtener2();
			$query3 = $this->model_s->obtener3();
			require_once 'view/master_page/header_SU.php';
			require_once 'view/master_page/index.php';
			require_once 'view/master_page/footer.php';
	}

	function indexAD(){
			$query = $this->model_s->obtener();
			$query2 = $this->model_s->obtener2();
			$query3 = $this->model_s->obtener3();
			require_once 'view/master_page/header_AD.php';
			require_once 'view/master_page/index.php';
			require_once 'view/master_page/footer.php';
	}

	function graficos(){

			$query = $this->model_s->obtener();
			$query2 = $this->model_s->obtener2();
			$query3 = $this->model_s->obtener3();
			require_once 'view/master_page/header.php';
			require_once 'view/master_page/graficos.php';
			require_once 'view/master_page/footer.php';
	}
	
	function graficosSU(){
			$query = $this->model_s->obtener();
			$query2 = $this->model_s->obtener2();
			$query3 = $this->model_s->obtener3();
			require_once 'view/master_page/header_SU.php';
			require_once 'view/master_page/graficos.php';
			require_once 'view/master_page/footer.php';
	}

	function graficosAD(){
			$query = $this->model_s->obtener();
			$query2 = $this->model_s->obtener2();
			$query3 = $this->model_s->obtener3();
			require_once 'view/master_page/header_AD.php';
			require_once 'view/master_page/graficos.php';
			require_once 'view/master_page/footer.php';
	}

	function contenido(){
			$query = $this->model_s->obtener();
			$query2 = $this->model_s->obtener2();
			$query3 = $this->model_s->obtener3();
			
			require_once 'view/master_page/contenido.php';
			require_once 'view/master_page/footer.php';
	}

	function espacios(){
			$query = $this->model_s->obtener();
			$query2 = $this->model_s->obtener2();
			$query3 = $this->model_s->obtener3();
			
			require_once 'view/master_page/espacios.php';
			require_once 'view/master_page/footer.php';
	}


}
 ?>
