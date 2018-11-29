<?php 
class usuario_model{
	private $BD;
	private $usuarios;	

	function __construct(){
		$this->BD = conexion::getConnection();
		$this->usuarios = array();
	}

	function get(){
		$query = $this->BD->query("SELECT * FROM usuarios");
		while($fila = $query->fetch_assoc()){
			$this->usuarios[] = $fila;
		}
		return $this->usuarios;	
	}

	function agregar($data){
		
	$sql = "CALL insertar_usuario('".$data['usr_rut']."','".$data['usr_nombres']."','".$data['usr_ape_paterno']."','".$data['usr_ape_materno']."',"."'".$data['usr_fecha']."','".$data['usr_tipo']."','".$data['usr_passwd']."')";
		mysqli_query($this->BD, $sql) or die ('error \n' .mysqli_error($this->BD));
	}

	function obtenerId($_id){
		//$sql = "CALL seleccionar_usuario(".$_id.")";
		$query = $this->BD->query("SELECT * FROM usuarios WHERE usr_id_usuario=$_id");
		while($fila = $query->fetch_assoc()){
			$this->usuarios = $fila;
		}
		return $this->usuarios;
	}


	function login($_rut){
		$query = $this->BD->query("SELECT * from usuarios WHERE usr_rut=$_rut");
		while($fila = $query->fetch_assoc()){
			$this->usuarios = $fila;
		}
		return $this->usuarios;
	}

	function borrar($_id){
		$sql = "CALL eliminar_usuario(".$_id.")";
		mysqli_query($this->BD, $sql) or die ('error \n' .mysqli_error($this->BD));
	}

	function actualizar($data,$_id){
		$sql = "UPDATE usuarios SET usr_nombres='".$data['usr_nombres']."', usr_apellido_paterno='".$data['usr_ape_paterno']."',
									usr_apellido_materno='".$data['usr_ape_materno']."', usr_fecha_hora='".$data['usr_fecha']."',
									usr_tipo='".$data['usr_tipo']."', usr_contrasenia='".$data['usr_passwd']."'		
									WHERE usr_id_usuario = $_id";
	mysqli_query($this->BD, $sql) or die ('error \n' .mysqli_error($this->BD));
	} 

	
}
?>