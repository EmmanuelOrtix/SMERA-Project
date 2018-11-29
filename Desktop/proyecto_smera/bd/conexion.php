<?php 

 // config.php
 // Credenciales
$mysqli = new mysqli("localhost","root","","estacionamiento_bd");

if(mysqli_connect_errno()){
	echo 'conexion fallida : '. mysqli_connect_errno();
	exit();
}

class conexion{
	public static function getConnection(){
		$conn = new mysqli("localhost:3306","root","","estacionamiento_bd");
		$conn->query("SET NAMES 'utf8'");
		return $conn;
	}
}

?>
