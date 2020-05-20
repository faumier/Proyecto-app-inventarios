<?php

include 'conectorBD.php';
$conexion= conexion();

$id_producto= $_GET["id"];

$sql="DELETE FROM articulo WHERE id='$id_producto'";

$resultado=$conexion->query($sql);

header("location:../vista/consulta_producto.php");

$conexion->close();

       