<?php  
session_start();
if (!$_SESSION['verificar']) {
  header('Location:index.php');
}
$crearUsuario = new UsuariosController();
$crearUsuario->CrearUsuarioController();
include_once "navbar.php";
include_once "sidebar.php";
?>
<div class="be-wrapper be-fixed-sidebar">
    <div class="be-content">
        <div class="main-content container-fluid">     
        	<div class="row">
	            <div class="col-md-12">
	              	<div class="panel panel-default panel-border-color panel-border-color-primary">
		                <div class="panel-heading panel-heading-divider">
		                	<i class="icon mdi mdi-account-add"></i> Crear Usuario<span class="panel-subtitle">Crea una nueva cuenta de usuario.</span>
		                </div>
		                <div class="panel-body">
		                  	<form style="border-radius: 0px;" class="form-horizontal group-border-dashed" onsubmit="return validarPassword()" method="post">
			                    <div class="form-group">
			                      <label class="col-sm-3 control-label" for="nombresCrearUsuario">Nombres</label>
			                      <div class="col-sm-6">
			                        <input type="text" class="form-control" id="nombresCrearUsuario" name="nombresCrearUsuario" autofocus>
			                        <p id="avisoNombresCrearUsuario" class="text-danger text-muted" style="display: none"></p>
			                      </div>
			                      <label id="avisoNombresCrearUsuario" class="text-muted text-danger"></label>
			                    </div>
			                    <div class="form-group">
			                      <label class="col-sm-3 control-label" for="apellidosCrearUsuario">Apellidos</label>
			                      <div class="col-sm-6">
			                        <input type="text" class="form-control" id="apellidosCrearUsuario" name="apellidosCrearUsuario">
			                        <p id="avisoApellidosCrearUsuario" class="text-danger text-muted" style="display: none"></p>
			                      </div>
			                    </div>
			                    <div class="form-group">
			                      <label class="col-sm-3 control-label" for="usuarioCrearUsuario">Usuario</label>
			                      <div class="col-sm-6">
			                        <input type="text" class="form-control" id="usuarioCrearUsuario" name="usuarioCrearUsuario" placeholder="Usuario Sugerido: ">
			                        <p id="avisoUsuarioCrearUsuario" class="text-danger text-muted" style="display: none"></p>
			                      </div>
			                    </div>
			                    <div class="form-group">
			                      <label class="col-sm-3 control-label" for="passwordCrearUsuario">Password</label>
			                      <div class="col-sm-6">
			                        <input type="password" class="form-control" id="passwordCrearUsuario" name="passwordCrearUsuario">
			                        <p id="avisoPasswordCrearUsuario" class="text-danger text-muted" style="display: none"></p>
			                      </div>
			                    </div>
			                    <div class="form-group">
			                      <label class="col-sm-3 control-label" for="repPasswordCrearUsuario">Repita password</label>
			                      <div class="col-sm-6">
			                        <input type="password" class="form-control" id="repPasswordCrearUsuario" name="repPasswordCrearUsuario">
			                        <p id="avisoRepPasswordCrearUsuario" class="text-danger text-muted" style="display: none"></p>
			                      </div>
			                    </div>
			                    <div class="form-group">
			                      <label class="col-sm-3 control-label" for="emailCrearUsuario">Email</label>
			                      <div class="col-sm-6">
			                        <input type="email" class="form-control" id="emailCrearUsuario" name="emailCrearUsuario">
			                        <p id="avisoEmailCrearUsuario" class="text-danger text-muted" style="display: none"></p>
			                      </div>
			                    </div>
													<div class="form-group">
														<label class="col-sm-3 control-label" for="deptoCrearUsuario">Departamento:</label>
														<div class="col-sm-6">
															<select class="form-control" id="deptoCrearUsuario" name="deptoCrearUsuario">
																<option value="0">Seleccione un departamento</option>
																<?php $crearUsuario->crearSelectDeptosController(); ?>
															</select>
															<p id="avisoDeptoCrearUsuario" class="text-danger text-muted" style="display: none"></p>
														</div>
													</div>
			                    <div class="form-group">
			                      <label class="col-sm-3 control-label" for="urlFotoCrearUsuario">Url Foto</label>
			                      <div class="col-sm-6">
			                        <input type="text" class="form-control" id="urlFotoCrearUsuario" name="urlFotoCrearUsuario">
			                        <p id="avisoUrlFotoCrearUsuario" class="text-danger text-muted" style="display: none"></p>
			                      </div>
			                    </div>
			                    <div class="form-group">
		                          <label class="col-sm-3 control-label">Rol</label>
		                          <div class="col-sm-6">
													<label class="radio-inline">
														<input type="radio" class="radioButton" id="redactor" name="rolCrearUsuario" value="redactor">Redactor
													</label>
													<label class="radio-inline">
														<input type="radio" class="radioButton" id="jefeRedaccion" name="rolCrearUsuario" value="jefeRedaccion">Jefe de redacción
													</label>
													<label class="radio-inline">
														<input type="radio" class="radioButton" id="editor" name="rolCrearUsuario" value="editor">Editor
													</label>
													<label class="radio-inline">
														<input type="radio" class="radioButton" id="admin" name="rolCrearUsuario" value="admin">Admin
													</label>
		                          </div>
		                          <p id="avisoRolCrearUsuario" class="text-danger text-muted" style="display: none"></p>
		                        </div>
			                    <div class="form-group">
			                      <label class="col-sm-3 control-label" for="preguntaSeguridadCrearUsuario">Escribe tu pregunta de seguridad</label>
			                      <div class="col-sm-6">
			                        <div class="input-group xs-mb-15"><span class="input-group-addon">¿</span>
			                          <input type="text" class="form-control" id="preguntaSeguridadCrearUsuario" name="preguntaSeguridadCrearUsuario"><span class="input-group-addon">?</span>
			                        </div>
			                      </div>
			                    </div>
			                    <div class="form-group" style="display: none" id="contenedorAvisoPreguntaSeguridadCrearUsuario">
			                    	<div class="col-sm-6 col-sm-offset-3">
			                    		<p id="avisoPreguntaSeguridadCrearUsuario" class="text-danger text-muted" style="display: none"></p>
			                    	</div>
			                    </div>
			                    <div class="form-group">
			                      <label class="col-sm-3 control-label" for="respuestaSeguridadCrearUsuario">Escribe tu respuesta de seguridad</label>
			                      <div class="col-sm-6">
			                        <input type="text" class="form-control" id="respuestaSeguridadCrearUsuario" name="respuestaSeguridadCrearUsuario">
			                        <p id="avisoRespuestaSeguridadCrearUsuario" class="text-danger text-muted" style="display: none"></p>
			                      </div>
			                    </div>
			                    <div class="form-group">
			                    	<div class="col-sm-6 col-md-offset-3">
			                    		<button type="submit" class="btn btn-info"><i class="icon mdi mdi-account-add"></i> Crear Usuario</button>
			                    	</div>
			                    </div>
		                  	</form>
		                </div>
	              	</div>
	            </div>
          	</div>
    	</div>
  	</div>
</div>