<section class="content">
    <div class="row">
        <div class="col-xs-12">
			<div class="box">
			    <div class="box-header">
			        <h3 class="box-title">Registro de Usuarios</h3>
			    </div>
			    <div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
						<tr>
							
							<th>Rut</th>
							<th>Nombre completo</th>
							<th>Fecha</th>
							<th>Tipo</th>
						</tr>
						</thead>
						<tbody>
							<?php foreach ($query as $data): ?>
							<tr>
								
								<td><?php echo $data['usr_rut'] ?></td>
							<td><?php echo $data['usr_nombres']  .' '. $data['usr_apellido_paterno'] .' '. $data['usr_apellido_materno'] ?></td>
								<td><?php echo $data['usr_fecha_hora'] ?></td>
								<td><?php echo $data['usr_tipo'] ?></td>
								<td>
									<a href="controlador.php?c=usuarios&a=usuarios&_id=<?php echo $data['usr_id_usuario'] ?>" class="btn btn-default">Editar</a>
									<a href="controlador.php?c=usuarios&a=borrarUsuario&_id=<?php echo $data['usr_id_usuario'] ?>" class="btn btn-danger">Eliminar</a>
								</td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
					</div>
            </div>
        </div>
	<div class="col-md-12 col-sm-12">
		<a href="controlador.php?c=usuarios&a=usuarios" class="btn-primary" style="padding: 10px; display: flex; float: right; width: 210px; border-radius: 5px; justify-content: center;">Agregar</a>
	</div>
	</div>
</section>