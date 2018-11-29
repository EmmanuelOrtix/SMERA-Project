<?php 
  //session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aplicacion | Smera</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="style/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="style/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="style/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="style/dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="../../plugins/pace/pace.min.css">
  
        
</head>

<body class="hold-transition skin-blue sidebar-mini" onload="recargar();">
<div class="wrapper">
<input type="hidden" id="txt_cargar" value="cargar">
  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>ra</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>S</b>mera</span>
    </a>

    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown notifications-menu">
            <a href="controlador.php">
              <i class="fa fa-home"></i>
            </a>
          </li>
          
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="style/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php  echo $_SESSION['user']. ' ' .$_SESSION['apellido']. ' ' . $_SESSION['apellidoM']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-footer">
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>

 <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active"><a href="#"><span>Usuario: <?php echo $_SESSION['usr_tipo']; ?></span></a></li>
        <li><a href="#"><i class="fa fa-wrench"></i> <span>Sistema</span></a></li>
         <li><a href="controlador.php?c=home&a=index"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
        <li><a href="controlador.php?c=home&a=graficos"><i class="fa fa-pie-chart"></i> <span>Indicadores</span></a></li>
      </ul>
    </section>
  </aside>

<div class="content-wrapper">
    <section class="content-header"></section>