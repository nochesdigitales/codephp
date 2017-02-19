<!DOCTYPE html>
<html>
<head>
<meta>
</head>

<body>
<table width="845" border="0" align="center">
 
   <?php 
 include('conexion.php');
 $consulta = "SELECT * from productos order by codigo";  
 $resultado = mysql_query($consulta);
 if(mysql_num_rows($resultado) > 0){
  ?> 
    
  <tr>
    <td colspan="3"><div align="center" class="Estilo1">
      <p>CONSULTA DE PRODUCTOS    </p>
    </div></td>
  </tr>
  <tr>
    <td colspan="3"><hr /></td>
  </tr>
  <tr>
    <td width="88"><div align="center">CODIGO</div></td>
    <td width="127"><div align="center">NOMBRE</div></td>
    <td width="142"><div align="center">PRECIO</div></td>
  </tr>
  <tr>
    <td colspan="3"><hr /></td>
  </tr>
 <?php
  while ($row = mysql_fetch_array($resultado)) 
  { 
   $codigo=$row['codigo'];
   $nombre=$row['nombre'];
   $precio=$row['precio'];
    ?>
  <tr> 
  <td width="88"><div align="center"><?php echo $row["codigo"];?></td> 
  <td width="127"><div align="center"><?php echo $row["nombre"];?></td>
  <td width="142"><div align="center"><?php echo $row["precio"];?></td>
  </tr> 
   <?php
 }
 }
 else
 {
 ?>  
     <h1 align="center">NO HAY PRODUCTOS REGISTRADOS</h1>
</table>
   <?php 
 } 
?>
</body>
</html>
