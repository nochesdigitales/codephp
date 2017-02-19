<html>
<head>
<meta charset="utf-8" />
<title> ..:PRACTICA:.. </title>
</head>
<body> 
<br>
<br>
<?php
include("conexion.php");

 $cedula=$_POST['cedula'];
 $priapellido=$_POST['priapellido'];
 $prinombre=$_POST['prinombre'];
 $fecha=$_POST['fecha'];
 $email=$_POST['email'];
 $url=$_POST['url'];
 $direccion=$_POST['direccion'];
 $edad=$_POST['edad'];

 $sql="INSERT INTO datos (cedula,priapellido,prinombre,fecha,email,url,direccion,edad) VALUES ('$cedula','$priapellido','$prinombre','$fecha','$email','$url','$direccion','$edad')";
  
 $cursor=mysql_query($sql);
 echo mysql_error();
 echo "<br>";
  
 $num=mysql_affected_rows();
 if($num!=0){
 	echo"Su registro ha sido insertado";
}
else{
	echo "error de insercion";
}

mysql_close();
?>

<br>
<br>
<br>
<center>
  <form action="index.php" method="post">
  <input type="submit" size="1" style="width:150px" value="Regresar">
  </form>
 </center>
</body>
</html>