<?php

 include_once 'conectorBD.php';
 
$conexion= conexion();

session_start();

$id_session=$_SESSION["usuario"]; 
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$empresa=$_POST["nombre_empresa"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
$correo=$_POST["correo"];
$credito=$_POST["credito"];

   
$sql="UPDATE cliente SET nombre= '$nombre', apellido= '$apellido', nombreempresa= '$empresa',"
        . "credito= '$credito', direccion= '$direccion', email= '$correo', telefono= '$telefono' WHERE id = $id_session ";
    
        
$resultado=$conexion->query($sql);
    
   
    if ($conexion->affected_rows>0){
        
        
        header("location:../vista/consultar_usuario.php");
        
    }  else {

        echo '<script>alert("No se pudo modificar")</script>';
}