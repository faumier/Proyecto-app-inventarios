    <?php

require 'conectorBD.php';

$conexion=  conexion();

$idcliente=$_POST["idcliente"];
$fecha=$_POST["fecha"];
$idarticulo=$_POST["idarticulo"];
$cantidad=$_POST["cantidad"];
$formatof= explode('/',$fecha );

$fecha_formato= $formatof[2].$formatof[0]. $formatof[1];




$sqlquery="INSERT INTO  pedidos (cantidadDelArticulo, fecha, fecha_entrega, idCliente) VALUES
($cantidad, NOW(), '$fecha_formato', $idcliente)";

$insecion1=$conexion->query($sqlquery);

$recuperar_id_pedido= mysqli_insert_id($conexion);

if ($insecion1){
    
    
    
 $sqlquery2="INSERT INTO detallepedido (idArticulo, idPedido)VALUES
($idarticulo, $recuperar_id_pedido)";
 
$insercion2=$conexion->query($sqlquery2);}

if ($conexion->affected_rows>0){
    
    
echo '<script> alert ("se creo un nuevo pedido");
   window.location="../vista/logiados_pedido.php";
   </script>';
 }

 else {
echo '<script> alert ("Error, su documentos no concide con el registrado Clientes");
    window.history.go(-1);
    </script>';    
     
 }

$conexion->close();

?>   