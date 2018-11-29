<?php  
$contador = 9; 
$total = 95;
$totalDiscapacitado = 15;
$contadorDis = 2;



foreach ($query as $data): 
$data['snr_estado'];

if($data['snr_estado'] == "ocupado"){
	$contador++;
   }
endforeach;

foreach ($query3 as $data3): 
$data3['snr_estado'];

if($data3['snr_estado'] == "ocupado"){
	$contador++;
   }
endforeach;

foreach ($query2 as $data2):
$data2['snr_estado'];
							
if($data2['snr_estado'] == "ocupado"){
	$contadorDis++;
   }
endforeach;

	$Ocupados = $contador;
	$estacionamientosLibres = $total -$contador;
	$ocupadoDis = $totalDiscapacitado - $contadorDis;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
</head>
<!--el metodo load content cargara todo lo que este entre las etiquetas body-->
<body>
	
	<div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-car"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><h4>Espacios Disponibles</h4></span>
              <span class="info-box-number"><h2 style="font-weight: bold; margin-top: -5px;"><?php echo $estacionamientosLibres;?></h2></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-car"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><h4>Espacios Ocupados</h4></span>
              <span class="info-box-number"><h2 style="font-weight: bold; margin-top: -5px;"><?php echo $Ocupados; ?></h2></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
    </div>
    <div class="row">
        <!-- /.col -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-wheelchair"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><h4>Espacios Disponibles Discapacitado</h4></span>
              <span class="info-box-number"><h2 style="font-weight: bold; margin-top: -5px;"><?php echo $ocupadoDis; ?></h2></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-wheelchair"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><h4>Espacios Ocupados Discapacitado</h4></span>
              <span class="info-box-number"><h2 style="font-weight: bold; margin-top: -5px;"><?php echo $contadorDis; ?></h2></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
<div class="row">
	<div class="col-sm-12">
    	<div class="box box-success">
            <div class="box-body chart-responsive">
              <div class="chart" id="sales-chart" style="height: 280px; position: relative;"></div>
               <h2 style="float:right; font-weight: bold;">Total Estacionamientos: 110</h2>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
    </div>

</body>
</html>