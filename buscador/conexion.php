<?php
$conexion = mysql_connect("localhost", "root", "1") or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db("basedatos", $conexion);
?>