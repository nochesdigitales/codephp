<!DOCTYPE html>
<html lang="es">
    <head>
        <!--  App Title  -->
        <title>Recuperacion de Password</title>
        <!--  App Description  -->
        <meta name="description" content="Sistema de Recuperacion de Password"/>
        <meta charset="utf-8">
        <meta name="author" content="Hector Izarra, Luis Lopez, Sasha Katrich"/>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
<body>
       <div class="container" role="main">
           <div class="col-md-4">	       
           </div>
           <div class="col-md-4">    
            <form id="frmRestablecer" action="registrar.php" method="POST">
                <div class="panel panel-default">
                    <div class="panel-heading">Registro de Usuario
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="nombre">Usuario</label>
                            <input type="texto" class="form-control" name="username" required>		
                            <label for="nombre">Contraseña</label>
                            <input type="password" class="form-control" name="password" required>		
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Registrar">
                        </div>
                    </div>
                </div>
            </form> 
            </div>
        </div>   
    </body>
</html>