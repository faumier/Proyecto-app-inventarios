<?php

require 'conectorBD.php';

$conexion=  conexion();

$id_empleado=$_POST["id_empleado"];
$id_cliente=$_POST["id_cliente"];
$impuesto=$_POST ["impuesto"];
$descuento=$_POST ["descuento"];
$forma_pago=$_POST ["pago"];    
$total=0;

$sql_insertar="INSERT INTO ventas (fecha, impuesto, descuento, formaDePago, total, idEmpleado, IdCliente)"
        . "VALUES (NOW(), $impuesto, $descuento,'$forma_pago', $total, $id_empleado, $id_cliente)";

$resultado=$conexion->query($sql_insertar);

header("location:consultar_factura_codigo.php?id=$id_cliente");


$conexion->close();

//while ($articulo= mysqli_fetch_object($resultado)){}

