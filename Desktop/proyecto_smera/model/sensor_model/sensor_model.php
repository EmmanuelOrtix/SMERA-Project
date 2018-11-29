<?php  

class sensor_model{
	private $BD;
	private $sensor;
	private $sensor2;
	private $sensor3;

	function __construct(){
		$this->BD = conexion::getConnection();
		$this->sensor = array();
		$this->sensor2 = array();
		$this->sensor3 = array();

	}

	function obtener(){
		$query = $this->BD->query("SELECT * FROM sensor_i order by snr_id DESC LIMIT 1");
		while ($fila = $query->fetch_assoc()) {
			$this->sensor[] = $fila;
		}
		return $this->sensor;
	}

	function obtener2(){
		$query2 = $this->BD->query("SELECT * FROM sensor_ii order by snr_id DESC LIMIT 1");
		while ($fila2 = $query2->fetch_assoc()) {
			$this->sensor2[] = $fila2;
		}
		return $this->sensor2;
	}

	function obtener3(){
		$query3 = $this->BD->query("SELECT * FROM sensor_iii order by snr_id DESC LIMIT 1");
		while ($fila3 = $query3->fetch_assoc()) {
			$this->sensor3[] = $fila3;
		}
		return $this->sensor3;
	}

	function agregar($estado1,$estado2,$estado3){
		$sql = "INSERT INTO sensor_i(snr_estado,snr_numero,snr_id_ubicacion) VALUES('$estado1','1','1')";
		$sql2 = "INSERT INTO sensor_ii(snr_estado,snr_numero,snr_id_ubicacion) VALUES('$estado2','2','2')";
		$sql3 = "INSERT INTO sensor_iii(snr_estado,snr_numero,snr_id_ubicacion) VALUES('$estado3','3','3')";

		mysqli_query($this->BD, $sql, $sql2, $sql3) or die ('error \n' .mysqli_error($this->BD));
 	}
}

?>