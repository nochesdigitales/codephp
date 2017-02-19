<?php
include 'conexion.php';
//Recibir datos y almacenarlos en variables

$username = $_POST["username"];
$password = $POST("password");
$email = $_POST["email"];

	$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE username = '$username'");
	if(mysqli_num_rows($verificar_usuario) > 0){
		echo '<script>
				alert ("El usuario ya esta registrado");
				window.history.go(-1);
			</script>';
		exit;
	}

	$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email'");
	if(mysqli_num_rows($verificar_correo) > 0){
		echo '<script>
				alert ("El correo ya esta registrado");
				window.history.go(-1);
			</script>';
		exit;
	}
	
	//Consultar para insertar
	$insertar = "INSERT INTO usuarios (username, password, email) VALUES ('$username', '$password','$email')";
	//Ejecutar consulta
	$resultado = mysqli_query($conexion, $insertar);	

	if(!$resultado){
		echo '<script>
				alert ("Error al registrarse");
				window.location="index.php";
				setTimeout ("redireccionar()", 5000);
			</script>';		
		exit;
	}
	else{
		echo '<script>
				alert ("Registro exitoso");
				window.location="recpassword.php";
				setTimeout ("redireccionar()", 5000);			
			</script>';	
		exit;
	}
	
//Cerrar Conexion
mysqli_close($conexion);