<?php

include 'conectorBD.php';
$conexion= conexion();

$id_cliente=$_GET["id"];

$sql="DELETE FROM ventas WHERE ventas.idCliente=$id_cliente";

$resultado=$conexion->query($sql);


echo '<script> alert ("Se borro la factura ");  
window.location="../vista/consultar_factura.php"; 

</script>';

$conexion->close();