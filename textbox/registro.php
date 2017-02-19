<?PHP 
	//realizar la conexion desde otro archivo
	include('controlador.php');

	
	//recibir el boton	
	$boton=$_POST["boton"];

	//recibir los datos del formulario
	$cedula = $_POST['cedula'];
	$nombre = $_POST['nombre'];
	$edad = $_POST['edad'];
	$sexo = $_POST['sexo'];

// Almacenar los datos
if($boton=="Guardar"){
	$sql="insert into alumno( cedula, nombre, edad, sexo) 
	values('$cedula', '$nombre', '$edad', '$sexo')";
	if(mysql_query($sql)){
		echo "<script>alert('Datos GUARDADOS Correctamente')</script>";
		echo "<script>window.location='registro.php'</script>";
	}else{
		echo "<script>alert('Datos no pudieron ser GUARDADOS')</script>";
	}
	
}

// Buscar los datos
if($boton=="Buscar"){
	$sql="select * from alumno where cedula='$cedula' ";
	$busqueda=mysql_query($sql);
	if($registro=mysql_fetch_array($busqueda)){
		$campo_clave = $registro['campo_clave'];
		$cedula = $registro['cedula'];
		$nombre = $registro['nombre'];
		$edad = $registro['edad'];
		$sexo = $registro['sexo'];
			}else{
		echo "<script>alert('Registro NO EXISTE en el Sistema')</script>";
	}
	
}

// Eliminar los datos
if($boton=="Eliminar"){
	if($cedula!=""){
		$sql="delete from alumno where cedula='$cedula'";
		mysql_query($sql);
		echo "<script>alert('Datos ELIMINADOS Correctamente')</script>";
		echo "<script>window.location='registro.php'</script>";
	}else{
		echo "<script>alert('Para poder ELIMINAR debe Realizar una busqueda')</script>";
		echo "<script>window.location='registro.php'</script>";
	}
	
}

// Modificar los datos
if($boton=="Modificar"){
	if($cedula!=""){
$sql="update alumno set cedula='$cedula', nombre='$nombre', edad='$edad', sexo='$sexo' where cedula='$cedula'";
		mysql_query($sql);
		echo "<script>alert('Datos Modificados Correctamente')</script>";
		echo "<script>window.location='registro.php'</script>";
	}else{
		echo "<script>alert('Para poder Modificadar debe Realizar una busqueda')</script>";
		echo "<script>window.location='registro.php'</script>";
	}
	
}

// Regresar
if($boton=="Regresar"){
		echo "<script>alert('Saliendo del Sistema')</script>";
			
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modulos  Basicos de PHP</title>

<style type="text/css">
body,td,th {
	color: #06F;
}
</style>
</head>
<body>

<center>
  <p><img src="imagenes/img.jpg" width="755" height="178" /></p>
  <p>&nbsp;</p>
</center>
<form action="" method="post" name="form1">
  <table width="50%" border="0" align="center" cellpadding="7" cellspacing="0">
  <tr>
    <td colspan="2"><div align="center">
      <h2><strong> Registro de Alumnos </strong></h2>
    </div></td>
    </tr>
  <tr>
    <td><div align="right"><strong>Cedula:</strong></div></td>
    <td><input name="cedula" type="text" size="25" maxlength="30" value="<?PHP echo $cedula; ?>" /></td>
  </tr>
  <tr>
  <tr>
    <td><div align="right"><strong>Nombre:</strong></div></td>
    <td><input name="nombre" type="text" size="40" maxlength="30" value="<?PHP echo $nombre; ?>" /></td>
  </tr>
  <tr>
    <td><div align="right"><strong>Edad:</strong></div></td>
    <td><input name="edad" type="text" size="25" maxlength="30" value="<?PHP echo $edad; ?>" /></td>
  </tr>
  <tr>
    <td><div align="right"><strong>Sexo:</strong></div></td>
    <td><input name="sexo" type="text" size="25" maxlength="30" value="<?PHP echo $sexo; ?>" /></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <table width="80%" border="0" cellpadding="5" cellspacing="0">
        <tr>
          <td><div align="center">
            <label>
            <input type="submit" name="boton" value="Guardar" />
            </label>
          </div></td>
          <td><div align="center">
            <input type="submit" name="boton" value="Buscar" />
          </div></td>
          <td><div align="center">
            <input type="submit" name="boton" value="Eliminar" />
          </div></td>
          <td><div align="center">
            <input type="submit" name="boton" value="Modificar" />
          </div></td>
		   <td><div align="center">
            <input type="reset" name="boton" value="Limpiar" />
		   </div></td>
		    <td><div align="center">
            <input type="submit" name="boton" value="Regresar" />
          </div></td>
        </tr>
      </table>
      </div></td>
    </tr>
</table>
</form>
        </div> <!-- end of main --></div>
</div>
<center><img src="imagenes/img2.jpg" width="755" height="70" /></center>
</body>
</html>