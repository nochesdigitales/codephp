<?php
require("conexion.php");
require("funciones.php");

$criterio = getParam($_GET["criterio"], "");
$total = 0;
if ($criterio != "") {
	$query = "SELECT * FROM alumno WHERE nombre like ".sqlValue($criterio."%", "text")." ORDER BY nombre ASC";
	$queEmp = mysql_query($query, $conexion);
	$total = mysql_num_rows($queEmp);
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
<form id="frbuscar" name="frbuscar" method="get" action="">
    <table width="251" border="0" align="center">
      <tr>
        <td width="121"><input name="criterio" type="text" id="criterio" size="40" value="<?php echo $criterio; ?>" /></td>
        <td width="122"><input type="submit" id="btbuscar" value="Buscar" /></td>
      </tr>
    </table>
  </form>
<?php if ($total > 0) { ?>
<table width="200" border="0" align="center">
  <tr>
    <td></td>
  </tr>
</table>
<table width="950" border="0" align="center">
 <tr>
        	<td><em>Total de Resultados: <?php echo $total; ?></em></td>
	        
  </tr>
  <tr>
        	<td width="300"><h4><strong>Cedula:</strong></h4></td>
	        <td width="150"><h4><strong>Nombre:</strong></h4></td>
	        <td width="60"><h4><strong>Edad:</strong></h4></td>
	        <td width="70"><h4><strong>Sexo:</strong></h4></td>

  </tr>
  <?php while ($rsEmp = mysql_fetch_assoc($queEmp)) { ?>
  <tr>
    <td><?php echo $rsEmp['cedula']; ?></td>
    <td><?php echo $rsEmp['nombre']; ?></td>
    <td><?php echo $rsEmp['edad']; ?></td>
    <td><?php echo $rsEmp['sexo']; ?></td>

  </tr>
  <?php } ?>
</table>
<p>
  <?php } ?>
        </div> <!-- end of main --></div>
</div>
<center><img src="imagenes/img2.jpg" width="755" height="70" /></center>
</body>
</html>