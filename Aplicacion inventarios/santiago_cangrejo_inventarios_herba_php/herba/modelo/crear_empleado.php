    <?php

require 'conectorBD.php';

$conexion=  conexion();

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$documento=$_POST["documento"];
$clave=$_POST["clave"];
$cargo=$_POST["cargo"];
$departameto=$_POST["departamento"];
$sede=$_POST["sede"];
$correo=$_POST["correo"];
$horario=$_POST["horario"];

$sqlquery="INSERT INTO  empleado (id,nombre, apellido, cargo, departamento, sede, horario, email)VALUES
($documento,'$nombre', '$apellido', '$cargo', '$departameto', '$sede', '$horario', '$correo')";

$insecion1=$conexion->query($sqlquery);

if ($insecion1){
    
 $sqlquery2="INSERT INTO  usuario ( contraseña, idEmpleado, idCliente)VALUES
( '$clave', $documento, NULL)";
 
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
