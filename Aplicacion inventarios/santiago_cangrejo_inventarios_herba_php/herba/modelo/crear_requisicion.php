    <?php

require 'conectorBD.php';

$conexion=  conexion();

$idempleado=$_POST["idempleado"];
$fecha=$_POST["fecha"];
$idarticulo=$_POST["idarticulo"];
$cantidad=$_POST["cantidad"];
//$formatof= explode('/', $fecha);
//$fecha_formato= $formatof[2].$formatof[0].$formatof[1];

    
$sqlquery="INSERT INTO  requisiciondemercancia (fecha, 	cantidad, fecha_entrega, idEmpleado, idArticulo) VALUES
(NOW(), $cantidad, '$fecha', $idempleado, $idarticulo)";

$insecion1=$conexion->query($sqlquery);



if ($conexion->affected_rows>0){
    
    
echo '<script> alert ("se creo una nueva requisicion de mercancia");
   window.location="../vista/logiados_requisicion.php";
   </script>';
 }

 else {
echo '<script> alert ("Error, su documentos no concide con el registrado de Empleados");
    window.history.go(-1);
    </script>';    
     
 }

$conexion->close();

?>   