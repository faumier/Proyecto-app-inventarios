    <?php

function elimiar($tabla, $id){
    
    require 'conectorBD.php';
    $conexion=  conexion();
    
    $query="DELETE FROM $tabla WHERE id=$id";
    $consulta=$conexion->query($query);
    
    
if ($conexion->affected_rows>0){
    
    
echo '<script> alert ("se elimino el registro");
   window.history.go(-1);
   </script>';
 }

 else {
echo '<script> alert ("No se elimino el registro");
    window.history.go(-1);
    </script>';    
     
 }

$conexion->close();
}

?>   
