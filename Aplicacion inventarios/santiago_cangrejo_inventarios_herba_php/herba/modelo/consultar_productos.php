<?php


require 'conectorBD.php';
$conexion=  conexion();
    
 
$nombre_producto=$_POST["nombre"];
        
$sql= "SELECT * FROM  articulo WHERE nombre LIKE '%$nombre_producto%'";
$consulta=$conexion->query($sql);

$conteo=$consulta->num_rows;

  

if($conteo==0){
    
    echo "No exite articulo con ese nombre";
    
}  else {
    
    while($fila=  mysqli_fetch_array($consulta, MYSQLI_ASSOC)){
    
    echo '<tabale><tr><td>';
    echo $fila["id"].'</td><td>';
    echo $fila["nombre"].'</td><td>';
    echo $fila["color"].'</td><td>';
    echo $fila["talla"].'</td><td>';
    echo $fila["modelo"].'</td><td>';
    echo $fila["preciounitario"].'</td><td>';   
    echo $fila["existenciamin"].'</td><td>';   
    echo $fila["existenciamax"].'</td><td></tr></table>';
    
}
    

}

$conexion->close();
?>