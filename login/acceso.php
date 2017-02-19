<?php
session_start(); 
if (isset($_GET['error']))
{
	$aux = $_GET['error'];
	switch($aux)
	{
		case 1:
			echo "Error en el usuario o la contraseña";
			break;
		default:
			echo "Error desconcido";
	}
} 
?>
<head>
<title>Practica T3 - T3</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
body,td,th {
	color: #09F;
}
</style>
</head>
<body>
<form action="controladora.php?proceso=validarlogin" method="POST">

<div align="center">
  <p align="center">&nbsp;</p>
  <h3 align="center" class="Estilo3"><img src="imagenes/cabe.png" alt="" width="1000" height="250" /></h3>
  <h2 align="center"><strong>Registro de Alumnos </strong></h2>
  <table width="200" border="0" bordercolor="#9E9E9E">
    <tr>
      <td width="98"><div align="center" class="Estilo1"><em>Usuario</em></div></td>
      <td width="86"><input name="login" type="text" id="login" /></td>
    </tr>
    <tr>
      <td height="26"><div align="center" class="Estilo1"><em>Clave</em></div></td>
      <td><div align="center">
          <input name="password" type="password" id="password" />
      </div></td>
    </tr>
  </table>
  <p>
    <input name="Submit" type="submit" value="Entrar" />
  </p>
</div>
</form>
<p class="Estilo3" align="center"><img src="imagenes/pie.png" alt="" width="1000" height="316" /></p>
<p class="Estilo3">&nbsp;</p>
<p class="Estilo3"><a href="cicpc.html"></a></p>
</body>
</html>