<?php

include 'conectorBD.php';
$conexion= conexion();

$id_requisicion=$_GET["id"];

$sql="DELETE FROM requisiciondemercancia WHERE requisiciondemercancia.id=$id_requisicion";

$resultado=$conexion->query($sql);


echo '<script> alert ("Se borro la requisicion");  
window.location="../vista/consulta_requisicion.php"; 

</script>';

$conexion->close();