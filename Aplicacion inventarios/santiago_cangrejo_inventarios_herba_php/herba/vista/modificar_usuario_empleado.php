<!DOCTYPE html>

<html>
    <head>
        <title>MODIFICAR EMPLEADO</title>
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
    
    $sql="SELECT * FROM empleado WHERE id=$id_session";
    
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
    
    
    <form action="../modelo/codigo_modificar_empleado.php" method="post">
<h1>MODIFICAR EMPLEADO</h1>

    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="Nombre" name="nombre" value="<?php echo $articulo->nombre ?>"/>
    </div>

    <div>
	       <label for="Edad">Apellido:</label>
               <input type="text" name="apellido" value="<?php echo $articulo->apellido ?>" />
    </div>

    
    <div>
	<label for="ID">Departamento:</label>
        <input type="text" id="ID" name="departamento" value="<?php echo $articulo->departamento ?>"  />
    </div>
   
    <div>
	<label for="ID">Sede:</label>
        <input type="text" id="ID" name="sede" value="<?php echo $articulo->sede ?>"  />
    </div>
   
   

  <div>
        <label for="Rol">Horario:</label>
        <select id="rol" name="horario" onchange="elegir_rol;">
            <option value="ninguno"><?php echo $articulo->horario ?></option>
            <option value="7am-5pm">7am-5pm</option>
            <option value="8am-6pm">8am-6pm</option>
            <option value="9am-7p">9am-7pm</option>
        </select>

    </div>

    <div>
            <label for="mail">E-mail:</label>
            <input type="email" name="correo" value="<?php echo $articulo->email ?>"/>
    </div>


    <div>
	    <label for="Edad">Cargo:</label>
            <input type="text" name="cargo" value="<?php echo $articulo->cargo ?>" />
    </div><br><br>
    
    <?php
    endwhile;

?>
    
    <div class="button">
        <button type="submit">Guardar</button>   <button type="button" onclick="location.href='consultar_usuario.php'" >Cancelar</button>
    </div>
</form>
