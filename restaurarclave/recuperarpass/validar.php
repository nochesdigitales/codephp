<?php

	include 'conexion.php';
	
	$email = $_POST['email'];

	if( $email != "" ){
	   $sql = " SELECT * FROM usuarios WHERE email = '$email' ";
	   $resultado = $conexion->query($sql);
		if($resultado->num_rows > 0){
	   	    		   
		   $resultar = mysqli_fetch_assoc($resultado);
	   	   $cadena = $resultar["password"];
		   		   
		   echo '<script>
				alert ("Tu contraseña es:  '.$cadena.'");
				window.location="recpassword.php";
				setTimeout ("redireccionar()", 5000);
				</script>';
			exit;   
	   }
	   else
		 
		echo '<script>
				alert ("No existe una cuenta asociada a ese correo");
				window.history.go(-1);
				</script>';
		exit;
	}
	else
	  		
		echo '<script>
				alert ("Debes introducir el email de la cuenta");
				window.history.go(-1);
				</script>';				
		exit;
?>