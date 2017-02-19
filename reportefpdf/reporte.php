    <?php error_reporting(0);
     
    require('fpdf/fpdf.php');
	
    //Conecto a la base de datos	
	require('conexion.php');
	$conexion=conectar();

    //Consulta la tabla productos solicitando todos los productos
    $resultado = mysql_query("SELECT * FROM user", $conexion);   
    
	//Instaciamos la clase para genrear el documento pdf
    $pdf=new FPDF();
     
    //Agregamos la primera pagina al documento pdf
    $pdf->AddPage();
     
    //Seteamos el inicio del margen superior en 25 pixeles
     
    $y_axis_initial = 25;
     
    //Seteamos el tiupo de letra y creamos el titulo de la pagina. No es un encabezado no se repetira
    $pdf->SetFont('Arial','B',12);
     
    $pdf->Cell(40,6,'',0,0,'C');
    $pdf->Cell(100,6,'LISTA DE USUARIOS REGISTRADOS',1,0,'C');
     
    $pdf->Ln(10);
     
    //Creamos las celdas para los titulo de cada columna y le asignamos un fondo gris y el tipo de letra
    $pdf->SetFillColor(232,232,232);
     
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(35,6,'Nombre de Usuario',1,0,'C',1);
    $pdf->Cell(54,6,'Nombres',1,0,'C',1);
    $pdf->Cell(54,6,'Apellidos',1,0,'C',1);
    $pdf->Cell(23,6,'C.I./RIF',1,0,'C',1);
    $pdf->Cell(25,6,'Telefono',1,0,'C',1);
     
    $pdf->Ln(10);
     
    //Comienzo a crear las fiulas de productos según la consulta mysql
     
    while($fila = mysql_fetch_array($resultado))
    {
     


    $pdf->Ln(15);
     
    }
     
    mysql_close($enlace);
     
    //Mostramos el documento pdf
    $pdf->Output();
     
    ?>