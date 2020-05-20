<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
          <title>AGREGAR PRODUCTO</title>
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
    
    ?>  
    
    
    <header>
        <div class="contenedor">
            <div id="marca">
                <h1><span class="resaltado">Sistema de Inventario Integrado</span></h1>
                <h2>Calcetería Herva</h2>
            </div>
            
        </div>
    </header>
    
    <form action="../modelo/codigo_crear_producto.php" method="post">
    
        <table>
       
  
    

        <tr>  
        <h1>AGREGAR PRODUCTO</h1>
        </tr>
    
        <tr>    
    
            <td><p>Nombre Producto:</p></td>
        <td><input type="text" id="Nombre" name="nombre"/></td>
   
        </tr>
        
        <tr>  
      <td><p>Color Producto:</p></td>
    <td><input type="text" id="Nombre" name="color"/></td>
       </tr>
        
        <tr>  
            <td><p>Modelo:</p></td>
        <td><textarea id="Descripcion" name="modelo"></textarea></td>
           </tr>
        
        <tr>  
    
        <td><p>Talla:</p></td>
        <td><select id="Talla" name="talla" onchange="elegir_Talla;">
        <option value="ninguno">Seleccionar</option>
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
    <td><input type="number" id="Precio_Entrada"  min="0" name="existencia_min"/></td>
    </tr>
        
<tr>  
    
    <td><p>Existencia max:</p></td>
    <td><input type="number" id="Precio_Entrada" min="0" name="existencia_max" /></td>
    
</tr>

<tr>  
    
    <td><p>Precio unitario:</p></td>
    <td><input type="number" id="Precio_Entrada" min="0" name="precio" step="0.1" /></td>
    
</tr>

        </table><br>
        
        <div class="button">
            <button type="submit">Guardar</button><button type="button" type="button" onclick="location.href='logiados_producto.php'">Cancelar</button>
    </div>
</form>

    