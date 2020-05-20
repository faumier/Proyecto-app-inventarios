<!DOCTYPE html>

<html>
    <head>
        <title>Sistema de inventarios | Bienvenidos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Sistema de inventario">
	<meta name="keywords" content="Invenarios, control, pedidos">
	<meta name="author" content="Calceteria Herva">
        <link rel="stylesheet" type="text/css" href="../vista/CSS/nuevo_estilos.css">
          <style>
            td{
                text-align: center;
                
            }
            
        </style>
    </head>
    <body>  
        
        <?php 
    
    session_start();
    
    if (!isset($_SESSION["usuario"])){
        
        header("location:../vista/login.php");
    }
    
    ?>
        
        
        <?php
        
       require 'conectorBD.php';
        $conexion=  conexion();


        $nombre_producto=$_POST["nombre"];

        $sql= "SELECT * FROM  articulo WHERE nombre LIKE '%$nombre_producto%'";
        $consulta=$conexion->query($sql);
                
        $conteo=$consulta->num_rows;

            

if($conteo==0){
    
    echo "No exite articulo con ese nombre";?>
              
        
        
            
    <?php
}  else {
    
    while ($articulo= mysqli_fetch_object($consulta)):?>
            
            
            <table id="tabla_crud" style="border: solid 1px ">
            <tr>
                
                <th>ID</th>
                <th>NOMBRE</th>
                <th>COLOR</th>
                <th>TALLA</th>
                <th>MODELO</th>
                <th>PRECIO UNITARIO</th>
                <th>EXISTENCIA MINIMA</th>
                <th>EXISTENCIA MAXIMA</th>
                             
            </tr>
      
            
            <tr>
                               
                <td><?php echo $articulo->id ?></td>
                <td><?php echo $articulo->nombre ?></td>
                <td><?php echo $articulo->color ?></td>
                <td><?php echo $articulo->talla ?></td>
                <td><?php echo $articulo->modelo ?></td>
                <td><?php echo $articulo->preciounitario ?></td>
                <td><?php echo $articulo->existenciamin ?></td>
                <td><?php echo $articulo->existenciamax ?></td>
                <td><button onclick="location.href='../vista/modificar_producto.php?id=<?php echo $articulo->id ?>'">Modificar</button></td>
                <td><button onclick="location.href='Borrar_producto.php?id=<?php echo $articulo->id ?>'" >Eliminar</button></td><br><br> 
            
            </tr>
            
         
    <?php endwhile;
}

$conexion->close();
?>
                       
            </table><br><br>
        
            <button onclick="location.href='../vista/consulta_producto.php'">Regresar</button>
    </body>
</html>
