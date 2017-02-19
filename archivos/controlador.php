<?php
          if (!$con=mysql_connect('localhost','root',"1")){
	  
	      echo"no se pudo conectar al servidor";
	    }
	   
	     if(!mysql_select_db('basedatos',$con)){
	     echo" no se pudo conectar a la base de datos";
	   }
	  ?>
	  
