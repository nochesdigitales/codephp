<?PHP

	if(!$enlace=mysql_connect("localhost", "root", "1")){
		echo "Error: No se pudo realizar la conexion con el servidor de base de datos";
	}else{
		if(!mysql_select_db("practica", $enlace)){
			echo "Error: No se pudo conectar a la base de datos";
		}
	}
?>
