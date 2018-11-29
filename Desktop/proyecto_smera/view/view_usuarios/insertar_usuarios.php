<div class="container">
   <div class="row">
    <div class="col-md-6">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Registrar usuario</h3>
            </div>
            <form class="form-horizontal" action="controlador.php?c=usuarios&a=insertar_usuarios" method="post">
              <div class="box-body">
                <input type="hidden" name="txt_id" value="<?php echo $data['usr_id_usuario'] ?>"/>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="">RUT:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $data['usr_rut'] ?>" placeholder="ingresa rut" name="rut" required oninput="checkRut(this)" id="rut">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-2">Nombres:</label>
                  <div class="col-sm-10">          
                    <input type="text" class="form-control" value="<?php echo $data['usr_nombres'] ?>" id="pwd" placeholder="ingresa nombres" name="txt_nombres" required="">
                  </div>
                </div>

              	<div class="form-group">
                    <label class="control-label col-sm-2">Apellido Paterno:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  value="<?php echo $data['usr_apellido_paterno'] ?>"placeholder="ingresa apellido paterno" name="txt_ape_paterno" required="">
                    </div>
                  </div>
            	
              	<div class="form-group">
                    <label class="control-label col-sm-2">Apellido Materno:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control"  value="<?php echo $data['usr_apellido_materno'] ?>" placeholder="ingresa apellido materno" name="txt_ape_materno" required="">
                    </div>
                  </div>

              	<div class="form-group">
                    <label class="control-label col-sm-2">Tipo:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" value="<?php echo $data['usr_tipo'] ?>" placeholder="ingresa tipo de usuario" name="txt_tipo" required=""> 
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="">Contraseña:</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" value="<?php echo $data['usr_contrasenia'] ?>" id="email" placeholder="ingresa contraseña" name="txt_password" required="">
                    </div>
                  </div>

                  <!-- sumbit -->
                  <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                      <input type="submit" class="btn btn-info pull-right" value="Registrar" />
                    </div>
                  </div>
                </div>
            </form>
        </div>
        </div> 
    </div>
</div>