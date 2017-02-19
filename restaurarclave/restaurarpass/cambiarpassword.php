<?php
include 'conexion.php';

$usuario = $_POST['usuario'];
$password1 = md5($_POST['password1']);
$password2 = md5($_POST['password2']); 

if( $password1 != $password2){
    echo '<script>
				alert ("Las contraseñas no coinciden");
				window.history.go(-1);
            </script>';		
			exit;
    }
    else{
        
        $sql = " SELECT * FROM usuarios WHERE usuario = '$usuario' ";
   	    $resultado = $conexion->query($sql); 
        if( $resultado->num_rows > 0 ){
           
            $sql = "UPDATE usuarios SET contrasena = '".md5($password1)."' WHERE usuario = '$usuario'";
                        
            $resultado = $conexion->query($sql);
				if($resultado){
                   
                    echo '<script>
				        alert ("El password se actualizo");
				        window.location="index.php";
				        setTimeout ("redireccionar()", 5000);
                        </script>';		
			         exit;                    
                    
                }        
        }         
    }