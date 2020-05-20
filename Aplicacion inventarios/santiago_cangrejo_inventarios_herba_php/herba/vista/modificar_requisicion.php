<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
          <title>MODIFICA REQUISICION</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Sistema de inventario">
    <meta name="keywords" content="Invenarios, control, pedidos">
    <meta name="author" content="Calceteria Herva">
    <link rel="stylesheet" type="text/css" href="CSS/nuevo_estilos.css">
    </head>
<body>
    
     <?php 
    
    session_start();
    
    if (!isset($_SESSION["usuario"])){
        
        header("location:login.php");
    }
    
    include_once '../modelo/conectorBD.php';
    
    $id=$_GET["id"];
    
    $conexion=  conexion();
    
    $sql="SELECT * FROM requisiciondemercancia WHERE requisiciondemercancia.id=$id";
    
    $resultado=$conexion->query($sql);
           
    
    ?>  
    
    
    <header>
        <div class="contenedor">
            <div id="marca">
                <h1><span class="resaltado">Sistema de Inventario Integrado</span></h1>
                <h2>Calcetería Herva</h2>
            </div>
            
        </div>
    </header>
    
    <?php 
    
    while ($articulo= mysqli_fetch_object($resultado)):?>
    
    
    
    <form action="../modelo/codigo_modificar_requisicion.php" method="post">
    
        <table>
       
  
    

        <tr>  
        <h1>MODIFICAR REQUISICION</h1>
        </tr>
        
          <tr>    
    
            
              <td><input type="hidden" id="Nombre" name="id" value="<?php echo $articulo->id ?>"/></td>
   
        </tr>
    
        <tr>    
    
            <td><p>Documento Empleado:</p></td>
            <td><input type="text"  name="idEmpleado" value="<?php echo $articulo->idEmpleado ?>"/></td>
   
        </tr>
        
        <tr>  
      <td><p>Fecha Entrega:</p></td>
      <td><input type="date"  name="fecha" value="<?php echo $articulo->fecha_entrega ?>"/></td>
       </tr>
       
       <tr>    
    
            <td><p>Codigo Articulo:</p></td>
            <td><input type="number"  name="idarticulo" min="0" value="<?php echo $articulo->idArticulo ?>"/></td>
   
        </tr>
        
       
        
    <tr>  
    
    <td><p>Cantidad:</label></p>
    <td><input type="number"   min="0" name="cantidad" value="<?php echo $articulo->cantidad?>"/></td>
    </tr>
 

<?php
    endwhile;

?>
        </table><br>
        
        <div class="button">
            <button type="submit">Guardar</button><button type="button" type="button" onclick="location.href='consulta_requisicion.php'">Cancelar</button>
    </div>
</form>
