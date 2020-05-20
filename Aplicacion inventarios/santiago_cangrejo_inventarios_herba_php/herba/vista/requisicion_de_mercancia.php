    <!DOCTYPE html>
<html>
<head>
    <title>REQUISICIÓN DE MERCANCÍA</title>
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
    <form action="../modelo/crear_requisicion.php" method="post">
        <h1 align="center">REQUISICIÓN DE MERCANCÍA</h1>
        
      

       <div>
            <label for="Nombre">Documento empleado:</label>
            <input type="text" name="idempleado" />
        </div>
       
      
        <div>
            <label for="fecha">Fecha Entrega: </label>
            <input type="date" name="fecha">    
        </div>
        
          <div>
            <label for="codigo">Codigo Producto:</label>
            <input type="text" id="Codigo" name="idarticulo" />
        </div>

             
        
        <div>
            <tr>
                <label for="Cantidad">Cantidad:</label>
                <td><input type="text" id="producto_cantidad"  name="cantidad"/></td>

        </tr><br><br>
           
        <div align="center">
            <button type='submit'>Enviar</button> <button type='button' onclick="location.href='logiados_requisicion.php'"n>Cancelar</button>
        </div>
        
      

   
</form>