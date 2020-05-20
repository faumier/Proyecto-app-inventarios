<!DOCTYPE html>

<html>
    <head>
        <title>MODIFICAR CLIENTE</title>
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
        
        header("location:../vista/login.php");
        
    }
        
     $id_session=$_SESSION["usuario"]; 
    
    include_once '../modelo/conectorBD.php';
    
    $conexion=  conexion();
    
    $sql="SELECT * FROM cliente WHERE id=$id_session";
    
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
    
    
    <form action="../modelo/codigo_modificar_cliente.php" method="post">
<h1>MODIFICAR CLIENTE</h1>
          
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="<?php echo $articulo->nombre ?>" />
        </div>

        <div>
	       <label for="Edad">Apellido:</label>
               <input type="text" name="apellido" value="<?php echo $articulo->apellido ?>" />
         </div>
        
                
        <div>
	       <label for="Contraseña">Nombre empresa:</label>
               <input type="text" name="nombre_empresa" value="<?php echo $articulo->nombreempresa ?>" />
        </div>

     
        <div>	
	       <label for="Direccion">Direccion:</label>
               <input type="text" name="direccion" value="<?php echo $articulo->direccion ?>" />
        </div>

        <div>
	       <label for="Telefono">Telefono:</label>
               <input type="text" name="telefono" value="<?php echo $articulo->telefono ?>" />
        </div>

        <div>
            <label for="mail">E-mail:</label>
            <input type="email" name="correo" value="<?php echo $articulo->email ?>"/>
        </div>
        
        <div>	
	       <label for="Direccion">Credito:</label>
               <input type="text" name="credito" value="<?php echo $articulo->credito ?>" />
        </div><br><br>
        
        <?php
    endwhile;
    
    $conexion->close();



?>
        
    <div class="button">
        <button type="submit">Modificar</button>   <button type="button" onclick="location.href='consultar_usuario.php'" >Cancelar</button>
    </div>
</form>
