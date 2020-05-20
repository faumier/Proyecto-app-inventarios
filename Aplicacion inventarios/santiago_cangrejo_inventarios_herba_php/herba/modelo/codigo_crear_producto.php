<?php
require 'conectorBD.php';

$conexion=  conexion();

$nombre=$_POST["nombre"];
$color=$_POST["color"];
$modelo=$_POST["modelo"];
$talla=$_POST["talla"];
$existencia_min=$_POST["existencia_min"];
$existencia_max=$_POST["existencia_max"];
$precio=$_POST["precio"];


$sql="INSERT INTO articulo (nombre, color, talla, modelo, preciounitario, existenciamin, existenciamax)
VALUES('$nombre', '$color', '$talla', '$modelo', $precio, $existencia_min ,$existencia_max );";

$conexion->query($sql); 

if ($conexion->affected_rows>0){
    
    
echo '<script> alert ("se creo un producto nuevo");
   window.location="../vista/logiados_producto.php";
   </script>';
}else {
    '<script> alert ("no se pudo agregar el producto");
    window.history.go(-1);
    </script>';    
     }
 
$conexion->close();
?>