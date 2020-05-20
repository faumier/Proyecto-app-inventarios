<!DOCTYPE html>
<html>
<head>
	<title>CONSULTAR PRODUCTO</title>
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
    <form action="../modelo/pagina_buscar_articulo.php" method="post">
<h1>CONSULTAR PRODUCTO</h1>
<h2>Ingresa el nombre parcial o completo </h2>
    
    
    <div>
        <label for="codigo">Nombre del producto:</label>
        <input type="text" name="nombre"  />
    </div>

<div class="button"><br><br>
    <button type="submit">Consultar</button> <button type="button" onclick="location.href='logiados_producto.php'" >Regresar</button>
    </div>    
</form>