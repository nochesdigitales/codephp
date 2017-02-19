<!doctype html>
<html lang="es">
	<head>
		<title>Formulario de Registro</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "navbar.php"; ?>
	<section class="main container">
		<div class="row">
			<section class="posts col-md-9">
				<div class="container">
						
					<?php

					$host_db = "localhost";
					$user_db = "root";
					$pass_db = "";
					$db_name = "registro";
					$tbl_name = "user";

					 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

					if ($conexion->connect_error) {
						 
						die("La conexion falló: " . $conexion->connect_error);
					}

						$buscarUsuario = "SELECT * FROM $tbl_name WHERE loginName = '$_POST[usern]' ";
						$result = $conexion->query($buscarUsuario);
						$count = mysqli_num_rows($result);


						if ($count == 1) {
							
							?>	
								<div class="alert alert-danger col-md-9" align="center">
									<h4>El Nombre de Usuario ya se Encuentra Registrado!</h4>
									<br/>
									<h4><a href='registro_usuario.php'>Por favor Intente Nuevamente</h4> 
								</div>
							<?

						}
						
					else{
							$query = "INSERT INTO user(loginName, passuser, nombre, apellido, ci_rif, telefono)
									  VALUES ('$_POST[usern]', '$_POST[pass]', '$_POST[nombre]', '$_POST[apellido]', '$_POST[ci_rif]', '$_POST[telefono]')";

						if ($conexion->query($query) === TRUE) {
							$nombre=$_POST['nombre'];
							$apellido=$_POST['apellido'];

							?>	
								<div class="alert alert-success col-md-9" align="center">
									<h4>Sr (a): <?=$nombre;?> <?=$apellido;?></h4> 
									<br/>
									<h4>Su Registro fue Exitoso</h4>
									<br>
									<h4><a href='index.php'>Regresar</a> </h4>
								</div>
							<?
						}

						else {
						 
							?>	
								<div class="alert alert-danger col-md-9" align="center">
									<h4>Error al crear el usuario!</h4>
									<br/>
									<h4><?=$query;?><?=$conexion;?> ->error</h4> 
								</div>
							<?

						}
					}
					 
				mysqli_close($conexion);

				?>
							
					
				</div>
		</section>

	<script src="estilos/js/jquery.js"></script>
	<script src="estilos/js/bootstrap.min.js"></script>
</body>
</html>	