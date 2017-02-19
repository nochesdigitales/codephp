<?php
include 'conexion.php';
//Recibir datos y almacenarlos en variables
$usuario = $_POST["usuario"];
$contrasena = md5($_POST["contrasena"]);
$email = $_POST["email"];

	//Consultar para insertar
	$insertar = "INSERT INTO usuarios (usuario, contrasena, email) VALUES ('$usuario', '$contrasena', '$email')";
	//Ejecutar consulta
	$resultado = mysqli_query($conexion, $insertar);	

	if(!$resultado){
		echo '<script>
				alert ("Error en conexion");
				window.history.go(-1);
			</script>';		
		exit;
	}
	else{
		echo '<script>
				alert ("Registro exitoso");
				window.location="restablecer.php";
				setTimeout ("redireccionar()", 5000);			
			</script>';	
		exit;
	}
	
//Cerrar Conexion
mysqli_close($conexion);