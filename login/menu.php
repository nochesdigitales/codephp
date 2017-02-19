<?php
session_start(); 
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
<p  align="center"><img src="imagenes/cabe.png" width="1000" height="250" /></p>
<p>&nbsp;</p>
<table width="200" border="0" align="center">
  <tr>
    <td><img src="imagenes/50.png" width="128" height="128" /></td>
    <td><img src="imagenes/60.png" width="128" height="128" /></td>
<?php
  if ($_SESSION['nivel']=="A")
  {
?> 
    <td><img src="imagenes/55.png" width="128" height="128" /></td>
    <td><a href="registro.php"><img src="imagenes/45.png" width="128" height="128" /></a></td>
	<?php
 }
?>  
    <td><a href="acceso.php"><img src="imagenes/5.png" width="128" height="128" /></a></td>
  </tr>
  <tr>
    <td align="center">Datos Generales</td>
    <td align="center">Consultas</td>
 <?php
  if ($_SESSION['nivel']=="A")
  {
?>    
    <td align="center">Eliminar Data</td>
    <td align="center">Usuario</td>
	<?php
 }
?>
    <td align="center">Salir</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p  align="center"><img src="imagenes/pie.png" width="1000" height="316" /></p>
</body>
</html>