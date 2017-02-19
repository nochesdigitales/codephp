<?php
require_once("jpgraph/jpgraph.php");
require_once("jpgraph/jpgraph_bar.php");// para grafico en barra
//require_once("lib/jpgraph/jpgraph_pie.php");// para grafico de torta activar

$mysqli= new mysqli("localhost","root", "", "empresa");

if($mysqli->connect_errno){
echo "Fallo al conectar a MySQL:(". $mysqli->connect_errno.")". $mysqli->connect_errno;
}

// select nombre de la tabla seguido del punto y la columna a llamar
//separado por una coma nombre de la segunda tabla punto y la columna a llamar
//FROM seguido de tabla coma tabla 2
//WHERE tabla 1 punto la columna id = a la tabla atencion punto la columna id usuario
$resultado=$mysqli->query("SELECT estatus.id, estatus.nombre, atencion.id, atencion.cantidad from estatus, atencion where estatus.id=atencion.id_usuario");

$estatus=array();
$estatus_nombre=array();
$cantidad=array();

while($row=$resultado->fetch_assoc()){
   $estatus[]=$row['id'];
   $estatus_nombre[]=$row['nombre'];
   $cantidad[]=$row['cantidad'];
}


// Creamos el grafico
$grafico = new Graph(700, 500, 'auto'); // para grafico en barra




//$grafico = new PieGraph(700, 500, 'auto');// para grafico de torta activar
$grafico->SetScale("textint");
/*$grafico->title->Set("Grafica estandarizada");*/
$grafico->xaxis->title->Set("Estatus");
$grafico->xaxis->SetTickLabels($estatus_nombre);
$grafico->yaxis->title->Set("Solicitudes Realizadas");
$barplot1 =new BarPlot($cantidad); // para grafico en barra
//$pieplot = new PiePlot($cantidad); // para grafico de torta activar
//$pieplot->SetSliceColors(array("red", "green", "blue", "yellow", "white")); // para grafico de torta activar
//$pieplot->ExplodeSlice(1, 25); // para grafico de torta activar
//$grafico->Add($pieplot); // para grafico de torta activar
//
$targ=array("bar_clsmex1.php#1","bar_clsmex1.php#2","bar_clsmex1.php#3","bar_clsmex1.php#4","bar_clsmex1.php#5","bar_clsmex1.php#6","bar_clsmex1.php#7","bar_clsmex1.php#8");
$alts=array("val=%d","val=%d","val=%d","val=%d","val=%d","val=%d","val=%d","val=%d");
$barplot1->SetCSIMTargets($targ,$alts);
$barplot1->SetFillColor("orange");


// Un gradiente Horizontal de morados

$barplot1->SetFillGradient("#7E09ED", "#FDBFFF", GRAD_HOR); // para grafico en barra

// 30 pixeles de ancho para cada barra
$barplot1->SetWidth(60);  // para grafico en barra
$grafico->Add($barplot1); // para grafico en barra
//$grafico->Stroke();
$grafico->StrokeCSIM();

?>