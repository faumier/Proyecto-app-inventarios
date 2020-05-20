    <!DOCTYPE html>
<html>
<head>
    <title>FACTURA CONSULTAR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Sistema de inventario">
    <meta name="keywords" content="Invenarios, control, pedidos">
    <meta name="author" content="Calceteria Herva">
   <link rel="stylesheet" type="text/css" href="CSS/nuevo_estilos.css">
</head>
<body>
    <header>
        <div class="contenedor">
            <div id="marca">
                <h1><span class="resaltado">Sistema de Inventario Integrado</span></h1>
                <h2>Calcetería Herva</h2>
            </div>
            
        </div>
    </header>
    <form action="../modelo/consultar_factura_codigo.php" method="get">
        <h1 align="center">CONSULTAR FACTURA</h1>
        
                 
          
        
           <div>
            <label for="codigo">Documento Cliente:</label>
            <input type="number" name="id" />
        </div>
        
       <br><br>
        
                              
        <div align="center">
            <button type='submit'>Consultar</button> <button type="button" onclick="location.href='logiados_pedido.php'">Cancelar</button>
        </div>
        
      </form>



</form>
