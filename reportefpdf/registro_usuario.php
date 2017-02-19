<?php session_start(); ?>
<html>
	<head>
		<title>Formulario de Registro</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Registro</h2>

		<form role="form" name="registro" action="registrar_usuario.php" method="post">
		
		 
						<div class="form-group">
						<label for="nombre">* Nombre de Usuario:</label>
						<input class="form-control" title="Ingrese el Nombre de Usuario, Este Campo no Permite Numeros, Caracteres Especiales ni Espacios y un maximo de 20 caracteres" required pattern="[A-Za-z]*" type="text"  name="usern" placeholder="Usuario o Nick" tabindex="1" maxlength="20" required="required">
						</div>

						<div class="form-group">		
						<label for="pass">* Password:</label>
						<input class="form-control" title="Ingrese una Contraseña de Minimo 6 Caracteres y un maximo de 20 caracteres que Contenga Mayusculas, Minusculas y Numeros" type="password" name="pass" placeholder="Contraseña" tabindex="2" maxlength="20" required="required">
						</div>
						
						<div class="form-group">				
						<label for="pass">* Confirmar Password:</label>						 
						<input class="form-control" title="Confirme la Contraseña que ingreso" type="password" name="pass2" placeholder="Confirmar Contraseña" tabindex="3" maxlength="20" required="required">
						</div> 
						
						<div class="form-group">
						<label for="nombre">* Nombres:</label>
						<input class="form-control" title="Ingrese su Primer y Segundo Nombre, Este Campo no Permite Numero ni Caracteres Especiales" required pattern="[a-zA-Z ]*" name="nombre" type="text" id="nombre" placeholder="Nombres" tabindex="4" maxlength="40" required="required">
						</div>
						
						<div class="form-group">
						<label for="apellido">* Apellidos:</label>
						<input class="form-control" title="Ingrese su Primer y Segundo Apellido, Este Campo no Permite Numero ni Caracteres Especiales" required pattern="[a-zA-Z ]*" name="apellido" type="text" id="apellido" placeholder="Apellidos" tabindex="5" maxlength="40" required="required">
						</div>
						
						<div class="form-group">
						<label for="ci_rif">* C.I: / RIF:</label>
						<input class="form-control" title="Ingrese su Numero de Cedula o RIF, Este Campo no Permite Letras Caracteres Especiales ni Espacios" required pattern="[0-9]*" name="ci_rif" type="text" id="ci_rif" placeholder="Cedula o RIF" tabindex="6" maxlength="9" required="required">
						</div>
						
						<div class="form-group">
						<label for="telefono">* Numero de Teléfonos:</label>
						<input class="form-control" title="Ingrese su Numero Telefonico Celular, Este Campo no Permite Letras Caracteres Especiales ni Espacios" required pattern="[0-9-/]*" name="telefono" type="text" id="telefono" placeholder="Numero de Telefonos 0274-2529845/04147895201" tabindex="7" maxlength="24" required="required">
						</div>


						<input class="btn btn-primary" type="submit" name="enviar" value="Registrar" title="Registrar datos del Usuario" tabindex="8">
						<input class="btn btn-primary" type="reset" value="Borrar" title="Borrar Campos" tabindex="9">				
						<input class="btn btn-primary" type="submit" value="Regresar" onclick="history.back(-1)" title="Regresar al Inicio" tabindex="10"/>
						
		</form>
		</div>
		</div>
		</div>


	</body>
</html>