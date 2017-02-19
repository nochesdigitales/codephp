<?PHP 
	//realizar la conexion desde otro archivo
	include('conexion.php');

	
	//recibir el boton	
	$boton=$_POST["boton"];

	//recibir los datos del formulario
	$codigo = $_POST['codigo'];
	$nombre = $_POST['nombre'];
	$precio = $_POST['precio'];
	
// Almacenar los datos
if($boton=="Guardar"){
	$sql="insert into productos( codigo, nombre, precio) 
	values('$codigo', '$nombre', '$precio')";
	if(mysql_query($sql)){
		echo "<script>alert('Producto Guardado Correctamente')</script>";
		echo "<script>window.location='productos.php'</script>";
	}else{
		echo "<script>alert('No se registro el producto')</script>";
	}
	
}

// Consultar los datos
if($boton=="Consultar"){
	$sql="select * from productos where codigo='$codigo' ";
	$busqueda=mysql_query($sql);
	if($registro=mysql_fetch_array($busqueda)){
		$codigo = $registro['codigo'];
		$nombre = $registro['nombre'];
		$precio = $registro['precio'];
			}else{
		echo "<script>alert('Producto no existe')</script>";
	}
	
}

// Eliminar los datos
if($boton=="Eliminar"){
	if($codigo!=""){
		$sql="delete from productos where codigo='$codigo'";
	    mysql_query($sql);
		echo "<script>alert('Datos eliminados correctamente')</script>";
		echo "<script>window.location='productos.php'</script>";
	}else{
		echo "<script>alert('Para Eliminar debe realizar consulta del producto')</script>";
		echo "<script>window.location='productos.php'</script>";
	}
	
}

// Modificar los datos
if($boton=="Modificar"){
	if($codigo!=""){
$sql="update productos set codigo='$codigo', nombre='$nombre', precio='$precio' where codigo='$codigo'";
		mysql_query($sql);
		echo "<script>alert('Datos Modificados Correctamente')</script>";
		echo "<script>window.location='productos.php'</script>";
	}else{
		echo "<script>alert('Para modificar debe realizar consulta del producto')</script>";
		echo "<script>window.location='productos.php'</script>";
	}
 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consultas Especificas</title>
</head>

<body>
<form action="" method="post" name="form1">
  <table width="50%" border="0" align="center" cellpadding="7" cellspacing="0">
  <tr>
    <td colspan="2"><div align="center">
      <h2><strong> Registro de Productos </strong></h2>
    </div></td>
    </tr>
  <tr>
    <td><div align="right"><strong>Codigo:</strong></div></td>
    <td><input name="codigo" type="text" size="30" maxlength="30" value="<?PHP echo $codigo; ?>" /></td>
  </tr>
  <tr>
  <tr>
    <td><div align="right"><strong>Nombre:</strong></div></td>
    <td><input name="nombre" type="text" size="30" maxlength="30" value="<?PHP echo $nombre; ?>" /></td>
  </tr>
  <tr>
    <td><div align="right"><strong>Precio:</strong></div></td>
    <td><input name="precio" type="text" size="30" maxlength="30" value="<?PHP echo $precio; ?>" /></td>
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
            <input type="submit" name="boton" value="Consultar" />
          </div></td>
          <td><div align="center">
            <input type="submit" name="boton" value="Modificar" />
          </div></td>
		  <td><div align="center">
            <input type="submit" name="boton" value="Eliminar" />
          </div></td>
		   <td><div align="center">
            <input type="reset" name="limpiar" value="Limpiar" />
		   </div></td>
		   
        </tr>
      </table>
      </div></td>
    </tr>
</table>
  <p><a href="listar.php" title="LISTA">LISTA DE PRODUCTOS</a></p>
</form>
</table>
</body>
</html>
