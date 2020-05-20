    <!DOCTYPE html>
<html>
<head>
    <title>PEDIDO</title>
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
    <form action="../modelo/codigo_hacer_pedido.php" method="post">
        <h1 align="center">HACER PEDIDO</h1>
        
        

       <div>
            <label for="Nombre">Documento cliente:</label>
            <input type="text" id="Nombre" name='idcliente' />
        </div>
       
        

        <div>
            <label for="fecha">Fecha Entrega: </label>
            <input type="date" name="fecha">    
        </div>
        
          <div>
            <label for="codigo">Codigo Articulo:</label>
            <input type="text" id="Codigo" name='idarticulo' />
        </div>
        
        <div>
     
           
        <div>
            <tr>
                <label for="Cantidad">Cantidad:</label>
                <td><input  type="number" id="producto_cantidad" name="cantidad" min='0'/></td>

        </tr><br><br>
           
        <div align="center">
            <button type='submit'>Enviar</button> <button type='button' onclick="location.href='logiados_pedido.php'" >Cancelar</button>
        </div>
        
      </form></td>

   


</form>


