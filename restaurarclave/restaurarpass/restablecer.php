<!DOCTYPE html>
<html lang="es">
    <head>
        <!--  App Title  -->
        <title>Restablecer Password</title>
        <!--  App Description  -->
        <meta name="description" content="Sistema de Recuperacion de Password"/>
        <meta charset="utf-8">
        <meta name="author" content="Hector Izarra, Luis Lopez, Sasha Katrich">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">	
    </head>
	 <body>
	  <div class="container" role="main">
	   <div class="col-md-4"></div>
	   <div class="col-md-4">
		<form action="cambiarpassword.php" method="post">
		 <div class="panel panel-default">
		  <div class="panel-heading"> Restablecer contraseña </div>
		  <div class="panel-body">
		   <p></p>
		   <div class="form-group">
			<label for="password"> Usuario </label>
			<input type="texto" class="form-control" name="usuario" required>
		   </div>
		   <div class="form-group">
			<label for="password"> Nueva contraseña </label>
			<input type="password" class="form-control" name="password1" required>
		   </div>
		   <div class="form-group">
			<label for="password2"> Confirmar contraseña </label>
			<input type="password" class="form-control" name="password2" required>
		   </div>		   
		   <div class="form-group">
			<input type="submit" class="btn btn-primary" value="Cambiar contraseña" >
		   </div>
		  </div>
		 </div>
		</form>
	   </div>
	  <div class="col-md-4"></div>
	  </div> <!-- /container -->
	</body>
</html>