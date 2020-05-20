    <!DOCTYPE html>
<html>
<head>
    <title>FACTURA</title>
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
    <form action="../modelo/crear_factura.php" method="post">
        <h1 align="center">GENERAR FACTURA</h1>
        
            
        
          <div>
            <label for="codigo">Documento empleado:</label>
            <input type="number" name="id_empleado" />
        </div>
        
           <div>
            <label for="codigo">Documento Cliente:</label>
            <input type="number" name="id_cliente" />
        </div>
        
         
       <div>
            <label for="Nombre">Impuestos:</label>
            <input type="number" name="impuesto" step="any" value="0.16" max="1.0" min="0" />
        </div>
       
        <div>
            <label for="fecha">Descuento: </label>
            <input type="number" step="any" name="descuento" value="0.0" max="1.0" min="0">    
        </div>

        <div>
            <label for="fecha">Forma de pago: </label>
            <select onchange="elegir_forma_pago;" name="pago">
                <option value="seleccionar">seleccionar</option>
                <option value="Efectivo">Efectivo</option>
                <option value="Tarjeta">Tarjeta</option>
                <option value="Cheque">Cheque</option>
                
            </select>
                
        </div><br><br>
        
                              
        <div align="center">
            <button type='submit'>Enviar</button> <button type="button" onclick="location.href='logiados_pedido.php'">Cancelar</button>
        </div>
        
      </form>



</form>


    