<?php
          if (!$con=mysql_connect('localhost','root',"12345678")){
	  
	      echo"no se pudo conectar al servidor";
	    }
	   
	     if(!mysql_select_db('sistemas',$con)){
	     echo" no se pudo conectar a la base de datos";
	   }
	  ?>
	  
