
<html>
<head>
	<title>Sistema de inventarios | Bienvenidos</title>
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
    
    <?php
    
    echo "<h2> Sesion de usuario con documento:    ".$_SESSION["usuario"]."</h2>";
    
       
    ?>
    <p style="position: absolute; left: 10px"><a href="../modelo/Cerrar_sesion.php">cerrar sesision</a></p><br><br><br>
    


<div style=" background: #9DA4FF  ;border: solid; width: 50%; text-align: center; margin-left:auto; margin-right: auto">

        <h1> Procesos de requisicion de mercancia</h1><br><br>
    
        <button type="button" onclick="location.href='requisicion_de_mercancia.php'">Hacer Requisicion</button>
    	<button type="button" onclick="location.href='consulta_requisicion.php'"> Consultar y Modificar Requisicion</button><br><br>
        <button type="button" onclick="location.href='logiados.php'"> Regresar</button><br><br>
    	
     </div>
	
</body>
</html> 