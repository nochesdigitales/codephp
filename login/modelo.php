<?php
session_start(); 
/*
	Modulo que contiene todas las funciones que permiten buscar, eliminar, modificar, conectar y 					    desconectar, entre otras a la base de datos y a las tablas
*/
function conectar()
{
  // Aqui va la conexion a la base de datos y tablas
   mysql_connect("localhost","root","12345678"); 
  //Base de datos con la que vamos a trabajar 
   mysql_select_db("sistemas"); 
}
function desconectar()
{
	// Aqui va desconexion
	mysql_close();
}
function existe($login, $password)
{
  // Aqui va la conexion a la base de datos y tablas
   mysql_connect("localhost","root","12345678"); 
  //Base de datos con la que vamos a trabajar 
   mysql_select_db("sistemas"); 
   
	$sql = "select * from usuario where	LOGIN = '$login' and  CLAVE = '$password'";
	$res = mysql_query($sql);
	if (mysql_num_rows($res) <= 0)
	{
		return false;
	}	
	else	
	{

       if ($row=mysql_fetch_array($res))
	   {
        $_SESSION['codusuario'] = trim($row["codusuario"]); 
        $_SESSION['LOGIN']=trim($row["login"]);
		$_SESSION['nivel']=trim($row["nivel"]);
       }
    	return true;
	  }
}

?>