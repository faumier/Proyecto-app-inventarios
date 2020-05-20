<?php

function conexion(){
    
 try {
    $BD=new PDO("mysql:host=localhost; dbname=inventariosherva", "root", "" );
    $BD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'conectr';
    
}

 catch (Exception $e){
     
     die("error   ". $e->getMessage());
 }
   
    
      
}
