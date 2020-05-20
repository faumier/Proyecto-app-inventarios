<?php

 include_once 'conectorBD.php';
 
 
 
    
    $id=$_POST["id"];
    $nombre=$_POST["nombre"];
    $color=$_POST["color"];
    $modelo=$_POST["modelo"];
    $talla=$_POST["talla"];
    $e_min=$_POST["existencia_min"];
    $e_max=$_POST["existencia_max"];
    $precio=$_POST["precio"];
    
    $conexion= conexion();
    
    $sql="UPDATE articulo SET nombre='$nombre', color= '$color', talla= '$talla', modelo= '$modelo' ,"
            . " preciounitario=$precio, existenciamin=$e_min, existenciamax=$e_max WHERE articulo.id=$id";
    
    $resultado=$conexion->query($sql);
    
//if ($conexion->affected_rows>0
    
    if ($conexion->affected_rows>0){
        
        
        header("location:../vista/consulta_producto.php");
        
    }  else {

        echo 'no se modifico ningun producto';
}