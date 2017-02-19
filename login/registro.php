<?PHP 
	//realizar la conexion desde otro archivo
	include('conexion.php');

	
	//recibir el boton	
	$boton=$_POST["boton"];

	//recibir los datos del formulario
	$codusuario = $_POST['codusuario'];
	$login = $_POST['login'];
	$clave = $_POST['clave'];
	$nivel = $_POST['nivel'];

// Almacenar los datos
if($boton=="Guardar"){
	$sql="insert into usuario( codusuario, login, clave, nivel) 
	values('$codusuario', '$login', '$clave', '$nivel')";
	if(mysql_query($sql)){
		echo "<script>alert('Usuario Guardado Correctamente')</script>";
		echo "<script>window.location='registro.php'</script>";
	}else{
		echo "<script>alert('Datos no pudieron ser GUARDADOS')</script>";
	}
	
}

// Buscar los datos
if($boton=="Buscar"){
	$sql="select * from usuario where codusuario='$codusuario' ";
	$busqueda=mysql_query($sql);
	if($registro=mysql_fetch_array($busqueda)){
		$campo_clave = $registro['campo_clave'];
		$codusuario = $registro['codusuario'];
		$login = $registro['login'];
		$clave = $registro['clave'];
		$nivel = $registro['nivel'];
			}else{
		echo "<script>alert('Registro NO EXISTE en el Sistema')</script>";
	}
	
}

// Eliminar los datos
if($boton=="Eliminar"){
	if($codusuario!=""){
		$sql="delete from usuario where codusuario='$codusuario'";
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
	if($codusuario!=""){
$sql="update usuario set codusuario='$codusuario', login='$login', clave='$clave', nivel='$nivel' where codusuario='$codusuario'";
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
		echo "<script>window.location='menu.php'</script>";	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Practica T3 - T3</title>

<style type="text/css">
body,td,th {
	color: #09F;
}
</style>
</head>
<body>

<center>
  <p><img src="imagenes/cabe.png" width="1000" height="250" /></p>
  <p>&nbsp;</p>
</center>
<form action="" method="post" name="form1">
  <table width="50%" border="0" align="center" cellpadding="7" cellspacing="0">
  <tr>
    <td colspan="2"><div align="center">
      <h2><strong> Registro de Usuarios </strong></h2>
    </div></td>
    </tr>
  <tr>
    <td><div align="right"><strong>Codusuario:</strong></div></td>
    <td><input name="codusuario" type="text" size="25" maxlength="30" value="<?PHP echo $codusuario; ?>" /></td>
  </tr>
  <tr>
  <tr>
    <td><div align="right"><strong>Login:</strong></div></td>
    <td><input name="login" type="text" size="40" maxlength="30" value="<?PHP echo $login; ?>" /></td>
  </tr>
  <tr>
    <td><div align="right"><strong>Clave:</strong></div></td>
    <td><input name="clave" type="text" size="25" maxlength="30" value="<?PHP echo $clave; ?>" /></td>
  </tr>
  <tr>
    <td><div align="right"><strong>Nivel:</strong></div></td>
    <td><select name="nivel">
	  <option value="S" selected="selected" <?PHP if($nivel=='S'){ echo 'selected="selected"'; } ?> >Seleccione Nivel</option>
	  <option value="A" <?PHP if($nivel=='A'){ echo 'selected="selected"'; } ?> >Administrador</option>
      <option value="B" <?PHP if($nivel=='B'){ echo 'selected="selected"'; } ?> >Basico</option>
    </select></td>
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
<center><img src="imagenes/pie.png" width="1000" height="316" /></center>
</body>
</html>