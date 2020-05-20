<?php

 include_once 'conectorBD.php';
 
$conexion= conexion();

session_start();

$id_session=$_SESSION["usuario"]; 
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$departamento=$_POST["departamento"];
$sede=$_POST["sede"];
$horario=$_POST["horario"];
$correo=$_POST["correo"];
$cargo=$_POST["cargo"];



    
$sql_e="UPDATE empleado SET nombre= '$nombre', apellido= '$apellido', cargo= '$cargo',"
        . "departamento= '$departamento', sede= '$sede', horario= '$horario', email= '$correo' WHERE id = $id_session ";
    
        
 $resultado=$conexion->query($sql_e);
    
//if ($conexion->affected_rows>0
    
    if ($conexion->affected_rows>0){
        
        
        header("location:../vista/consultar_usuario.php");
        
    }  else {

         echo '<script>alert("No se pudo modificar")</script>';
}