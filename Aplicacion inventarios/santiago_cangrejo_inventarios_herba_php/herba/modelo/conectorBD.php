<?php
function conexion(){
    $dbhost="localhost";
    $dbname="inventariosherva";
    $dbuser="root";
    $dbpaswrd="";

    
    $conexion=new mysqli("$dbhost","$dbuser","$dbpaswrd","$dbname");

    if ($conexion->connect_errno)

        echo "problemas de conexion". '<br>'. $conexion->connect_error;

    else 
        
    return $conexion;}
    
?>