<?php

include 'conectorBD.php';
$conexion= conexion();

session_start();
$id=$_SESSION["usuario"];

    
$sql="DELETE FROM empleado WHERE id='$id'";

$resultado=$conexion->query($sql);

header("location:../vista/consultar_usuario.php");

$conexion->close();
    