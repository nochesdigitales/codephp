<?php
	if($_POST)
	{	
		$num1 = $_POST
		['numero1'];
		$num2 = $_POST
		['numero2'];
		$suma = $num1 + $num2;
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
<table width="214" align="center">
	<tr>
		<td>Valor 1</td>
		<td><input type="text" name="numero1" /></td>
	</tr>
	<tr>
		<td height="27">Valor 2</td>
		<td><input type="text" name="numero2" /></td>
	</tr>
	<tr>
		<td>Resultado</td>
		<td><input type="text" name="suma" value="<?PHP echo $suma; ?>"></td>
	</tr>
	<tr>
	  <td colspan="2" align="right"><input type="submit" value="sumar" /></td>
    </tr>
   
</table>

</form>
        </div> <!-- end of main --></div>
</div>
<center><img src="imagenes/img2.jpg" width="755" height="70" /></center>
</body>
</html>