    <?php

require 'conectorBD.php';

$conexion=  conexion();

$id_requisicion=$_POST["id"];
$idempleado=$_POST["idEmpleado"];
$fecha=$_POST["fecha"];
$idarticulo=$_POST["idarticulo"];
$cantidad=$_POST["cantidad"];
$formatof= explode('/',$fecha );

$fecha_formato= $formatof[2].$formatof[0]. $formatof[1];




$sqlquery="UPDATE requisiciondemercancia SET fecha=NOW(), cantidad=$cantidad,"
        . " fecha_entrega='$fecha', idEmpleado=$idempleado, idArticulo=$idarticulo WHERE requisiciondemercancia.id=$id_requisicion";

$insecion1=$conexion->query($sqlquery);


$afectado=$conexion->affected_rows;

if ($afectado>0){
    
    
echo '<script> alert ("se actualizo la requisicion");
   window.location="../vista/logiados_requisicion.php";
   </script>';
 }

 else {
echo '<script> alert ("No se pudo actualizar la requisicion");
    window.location="../vista/logiados_requisicion.php";
    </script>';    
     
 }

$conexion->close();

?>   