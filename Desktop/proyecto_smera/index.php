<?php 
session_start(); 
require_once 'bd/conexion.php';

if(isset($_SESSION["user"])){
  //header("location: welcome.php");
}

if(!empty($_POST)){
  $rut  = mysqli_real_escape_string($mysqli,$_POST['rut']);
  $password = mysqli_real_escape_string($mysqli,$_POST['password']);
  $error    = '';

  $sha1_pass = sha1($password);

  $sql = "SELECT usr_rut, usr_nombres, usr_apellido_paterno, usr_apellido_materno, usr_tipo, usr_contrasenia FROM usuarios WHERE usr_rut='$rut' AND usr_contrasenia='$password'";
  $result = $mysqli->query($sql);
  $rows = $result->num_rows;

  if($rows > 0){

    $row = $result->fetch_assoc();

  if($row['usr_tipo'] == 'admin'){
    $_SESSION['user'] = $row['usr_nombres'];
    $_SESSION['apellido']   = $row['usr_apellido_paterno'];
    $_SESSION['apellidoM'] = $row['usr_apellido_materno'];
    $_SESSION['usr_tipo'] = "Administrador";

    header("location: controlador.php?c=Home&a=indexAD");

  }elseif($row['usr_tipo'] == 'superSU'){
    
    $_SESSION['user'] = $row['usr_nombres'];
    $_SESSION['apellido']   = $row['usr_apellido_paterno'];
    $_SESSION['apellidoM'] = $row['usr_apellido_materno'];
    $_SESSION['usr_tipo'] = "Super Usuario";

    header("location: controlador.php?c=Home&a=indexSU");

  }elseif($row['usr_tipo'] == 'usuario'){

    $_SESSION['user'] = $row['usr_nombres'];
    $_SESSION['apellido']   = $row['usr_apellido_paterno'];
    $_SESSION['apellidoM'] = $row['usr_apellido_materno'];
    $_SESSION['usr_tipo'] = "Bienvenido";

    header("location: controlador.php?c=Home&a=index");

  }else{
    header("location: index.php");
  }

  }else{
    $error = "nombre o contraseña incorrectos";
  }

}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Smera | Login</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="style/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="style/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="style/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="style/dist/css/skins/skin-blue.min.css">
        
</head>

<body class="hold-transition skin-blue">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>ra</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>S</b>mera</span>
    </a>
	<nav class="navbar navbar-static-top" role="navigation"></nav>
  </header>
	
	<div class="container" style="padding-top: 8%;">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form name="fomr1" class="form-horizontal box-footer" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST"> 
              <div class="box-info">
		            <div class="box-header with-border">
		              <h3 class="box-title">Ingresar Usuario</h3>
		            </div>
              <div class="box-body">
                
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Rut</label>
  				        	<div class="col-sm-8">
                      <input name="rut" type="text" id="rut" class="form-control" oninput="checkRut(this)" required placeholder=" Ingrese RUT">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
                    <div class="col-sm-8">
                      <input type="password" name="password" class="form-control" required id="inputPassword3"  placeholder="Ingrese Password">
                    </div>
                  </div>
                  <div id="error"></div>
               </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <input class="btn btn-default" type="submit" value="Ingresar" style="float: right;">
              </div>
              <!-- /.box-footer -->
          </div>
            </form>
		</div>
		<div class="col-md-4"></div>
	</div>

  <script src="style/jquery/validarut.js"></script>  
</body>

</html>