<?php

try {
    $BD=new PDO("mysql:host=localhost; dbname=inventariosherva", "root", "" );
    $BD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $consulta="SELECT * FROM usuario WHERE contraseña= :clave AND (idEmpleado= :docu1 OR idCliente= :docu2)";
    $resultado=$BD->prepare($consulta);   
    $password=  htmlentities(addslashes($_POST["clave"]));
    $user=  htmlentities(addslashes($_POST["usuario"]));
    $resultado->bindValue(":clave", $password);
    $resultado->bindValue(":docu1", $user);
    $resultado->bindValue(":docu2", $user);
    $resultado->execute();
    
    $num=$resultado->rowCount();

    if ($num!=0){
        
        session_start();
        $_SESSION["usuario"]=$_POST["usuario"];
        
        header("location:../vista/logiados.php");}

    else{
    
    
        header("location:../vista/login.php");}

}

 catch (Exception $e){
     
     die("error   ". $e->getMessage());
 }




















