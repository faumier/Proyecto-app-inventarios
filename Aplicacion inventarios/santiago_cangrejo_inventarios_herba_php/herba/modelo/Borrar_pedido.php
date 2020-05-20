<?php

include 'conectorBD.php';
$conexion= conexion();

$id_pedido=$_GET["id"];

$sql="DELETE FROM pedidos WHERE pedidos.id=$id_pedido";

$resultado=$conexion->query($sql);


echo '<script> alert ("Se borro el pedido ");  
window.location="../vista/consultar_pedido.php"; 

</script>';

$conexion->close();