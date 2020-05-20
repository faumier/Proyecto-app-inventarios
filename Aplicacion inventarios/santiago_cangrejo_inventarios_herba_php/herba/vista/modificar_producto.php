    <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
          <title>MODIFICA PRODUCTO</title>
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
    
    $sql="SELECT * FROM articulo WHERE id=$id";
    
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
    
    
    
    <form action="../modelo/codigo_modificar_producto.php" method="post">
    
        <table>
       
  
    

        <tr>  
        <h1>MODIFICAR PRODUCTO</h1>
        </tr>
        
          <tr>    
    
            
              <td><input type="hidden" id="Nombre" name="id" value="<?php echo $articulo->id ?>"/></td>
   
        </tr>
    
        <tr>    
    
            <td><p>Nombre Producto:</p></td>
            <td><input type="text" id="Nombre" name="nombre" value="<?php echo $articulo->nombre ?>"/></td>
   
        </tr>
        
        <tr>  
      <td><p>Color Producto:</p></td>
      <td><input type="text" id="Nombre" name="color" value="<?php echo $articulo->color ?>"/></td>
       </tr>
        
        <tr>  
            <td><p>Modelo:</p></td>
        <td><textarea id="Descripcion" name="modelo"><?php echo $articulo->modelo ?></textarea></td>
           </tr>
        
        <tr>  
    
        <td><p>Talla:</p></td>
        <td><select id="Talla" name="talla" onchange="elegir_Talla;">
        <option value="ninguno"><?php echo $articulo->talla ?></option>
        <option value=" 4-6">Talla 4-6</option>
        <option value=" 6-8">Talla 6-8</option>
        <option value=" 8-1">Talla 8-10</option>
        <option value=" 9-1">Talla 9-11</option>
        <option value="10-12">Talla 10-12</option>
        <option value='XS'>XS</option>
        <option value='S'>S</option>
        <option value='M'>M</option>
        <option value='L'>L</option>
        <option value='XL'>XL</option>
        <option value='UNICA'>Talla unica</option>
        </select></td>
        </tr>

    <tr>  
    
    <td><p>Existencia min:</label></p>
    <td><input type="number" id="Precio_Entrada"  min="0" name="existencia_min" value="<?php echo $articulo->existenciamin ?>"/></td>
    </tr>
        
<tr>  
    
    <td><p>Existencia max:</p></td>
    <td><input type="number" id="Precio_Entrada" min="0" name="existencia_max" value="<?php echo $articulo->existenciamax ?>"/></td>
    
</tr>

<tr>  
    
    <td><p>Precio unitario:</p></td>
    <td><input type="number" id="Precio_Entrada" min="0" name="precio" step="0.1" value="<?php echo $articulo->preciounitario ?>" /></td>
    
</tr>

<?php
    endwhile;

?>
        </table><br>
        
        <div class="button">
            <button type="submit">Guardar</button><button type="button" type="button" onclick="location.href='consulta_producto.php'">Cancelar</button>
    </div>
</form>

    