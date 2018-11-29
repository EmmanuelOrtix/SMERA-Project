<?php 
require_once "bd/conexion.php";

$controller = 'home';

if(!isset($_REQUEST['c'])){
	require_once "controller/$controller"."_controller.php";
	$controller = ucwords($controller) . '_controller';
	$controller = new $controller;
	$controller->index();
}else{
	$controller = ucwords($_REQUEST['c']);
	$accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'index';

	require_once "controller/$controller"."_controller.php";
	$controller = ucwords($controller) . '_controller';
	$controller = new $controller;

	call_user_func(array($controller, $accion));
}
?>

<!-- <div class="row">
	<div class="col-sm-6">
			<div class="box">
				<table class="table table-bordered">
					<tr style="text-align: center;">
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
					</tr>
				</table>
			</div>
		</div>

	<div class="col-sm-6">
			<div class="box">
				<table class="table table-bordered">
					<tr style="text-align: center;">
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
						<td><span class="fa fa-car"><p></p></span></td>
					</tr>
				</table>
			</div>
		</div>
	</div> -->

	