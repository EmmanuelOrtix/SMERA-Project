<?php 
require("config.php");
// Leemos los valores que nos llegan por GET
 //$estado1 = mysqli_real_escape_string($con, $_GET['a']);
$estado1 = isset($_GET['estado1']) ? $_GET['estado1'] : null;
$estado2 = isset($_GET['estado2']) ? $_GET['estado2'] : null;
$estado3 = isset($_GET['estado3']) ? $_GET['estado3'] : null;
// EInsertamos los valores en la tabla
$query = "INSERT INTO sensor_i(snr_estado,snr_numero,snr_id_ubicacion) VALUES('$estado2','1','1')";
$query2 = "INSERT INTO sensor_ii(snr_estado,snr_numero,snr_id_ubicacion) VALUES('$estado1','2','2')";
$query3 = "INSERT INTO sensor_iii(snr_estado,snr_numero,snr_id_ubicacion) VALUES('$estado3','3','3')";
 // Ejecutamos la instruccion
mysqli_query($con, $query);
mysqli_query($con, $query2);
mysqli_query($con, $query3);
mysqli_close($con);
?>