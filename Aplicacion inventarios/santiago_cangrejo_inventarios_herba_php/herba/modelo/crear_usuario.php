    <?php

require 'conectorBD.php';

$conexion=  conexion();

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$documento=$_POST["documento"];
$clave=$_POST["clave"];
$nombre_empresa=$_POST["nombre_empresa"];
$direccion=$_POST["direccion"];
$correo=$_POST["correo"];
$telefono=$_POST["telefono"];
$credito=$_POST["credito"];


$sqlquery="INSERT INTO  cliente (id, nombre, apellido, nombreempresa, credito, direccion, email, telefono)VALUES
($documento,'$nombre', '$apellido', '$nombre_empresa', '$credito', '$direccion', '$correo', '$telefono')";

$insecion1=$conexion->query($sqlquery);

if ($insecion1){
    
 $sqlquery2="INSERT INTO  usuario (contraseña, idEmpleado, idCliente)VALUES
( '$clave', NULL, $documento)";
 
$insercion2=$conexion->query($sqlquery2);}

if ($conexion->affected_rows>0){
    
    
echo '<script> alert ("se creo un usuario nuevo");
   window.location="../vista/login.php";
   </script>';
 }

 else {
echo '<script> alert ("error");
    window.history.go(-1);
    </script>';    
     
 }

$conexion->close();

?>