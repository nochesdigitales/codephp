<?PHP 
	//realizar la conexion desde otro archivo
	include('controlador.php');

	
	//recibir el boton	
	$boton=$_POST["boton"];

	//recibir los datos del formulario
	$codigo = $_POST['codigo'];
	$archivo = $_POST['archivo'];


// Almacenar los datos
if($boton=="Guardar"){
	$sql="insert into alumno( codigo, archivo) 
	values('$codigo', '$archivo')";
	if(mysql_query($sql)){
		echo "<script>alert('Datos GUARDADOS Correctamente')</script>";
		echo "<script>window.location='registro.php'</script>";
	}else{
		echo "<script>alert('Datos no pudieron ser GUARDADOS')</script>";
	}
	
}

// Buscar los datos
if($boton=="Buscar"){
	$sql="select * from alumno where codigo='$codigo' ";
	$busqueda=mysql_query($sql);
	if($registro=mysql_fetch_array($busqueda)){
		$campo_clave = $registro['campo_clave'];
		$codigo = $registro['codigo'];
		$archivo = $registro['archivo'];

			}else{
		echo "<script>alert('Registro NO EXISTE en el Sistema')</script>";
	}
	
}

// Eliminar los datos
if($boton=="Eliminar"){
	if($codigo!=""){
		$sql="delete from alumno where codigo='$codigo'";
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
	if($codigo!=""){
$sql="update alumno set codigo='$codigo', archivo='$archivo' where codigo='$codigo'";
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
      <h2><strong> Registro de Archivos </strong></h2>
    </div></td>
    </tr>
  <tr>
    <td><div align="right"><strong>Codigo:</strong></div></td>
    <td><input name="codigo" type="text" size="25" maxlength="30" value="<?PHP echo $codigo; ?>" /></td>
  </tr>
  <tr>
    <td><div align="right"><strong>Archivo:</strong></div></td>
    <td><input name="archivo" type="file" size="25" maxlength="30" value="<?PHP echo $archivo; ?>" /></td>
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