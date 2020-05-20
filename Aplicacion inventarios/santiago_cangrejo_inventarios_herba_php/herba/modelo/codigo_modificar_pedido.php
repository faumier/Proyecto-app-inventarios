    <?php

require 'conectorBD.php';

$conexion=  conexion();

$id_pedido=$_POST["id"];
$idcliente=$_POST["idcliente"];
$fecha=$_POST["fecha"];
$idarticulo=$_POST["idarticulo"];
$cantidad=$_POST["cantidad"];
$formatof= explode('/',$fecha );

$fecha_formato= $formatof[2].$formatof[0]. $formatof[1];




$sqlquery="UPDATE pedidos SET cantidadDelArticulo=$cantidad, fecha=NOW(),"
        . " fecha_entrega='$fecha', idCliente=$idcliente WHERE pedidos.id=$id_pedido";

$insecion1=$conexion->query($sqlquery);



if ($insecion1){
    

    
$sqlquery2="UPDATE detallepedido SET idArticulo=$idarticulo, idPedido=$id_pedido WHERE detallepedido.idPedido=$id_pedido";
 
$insercion2=$conexion->query($sqlquery2);}

$afectado=$conexion->affected_rows;

if ($afectado>0){
    
    
echo '<script> alert ("se actualizo el pedido");
   window.location="../vista/logiados_pedido.php";
   </script>';
 }

 else {
echo '<script> alert ("11se actulizo el pedido");
    window.location="../vista/logiados_pedido.php";
    </script>';    
     
 }

$conexion->close();

?>   