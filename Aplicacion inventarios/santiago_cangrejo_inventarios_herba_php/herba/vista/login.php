<!DOCTYPE html>
<html>
<head>
    <title>VALIDAR USUARIO</title>
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
            <nav>
                <ul>
                    <li><a href="index.php">Incio</a></li>
                    <li class="actual"><a href="login.php">Ingresar</a></li>
                    <li><a href="registrar_usuario.php">Registrarse</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>

    <form action="../modelo/login_sesiones.php" method="post">
<h1>VALIDAR USUARIO</h1>
<table>
    <div>
        <tr><td> <label for="usuario">DOCUMENTO:</label></td>
            <td><input type="number" id="Usuario" name="usuario" /></td></tr> 
    </div>
    <div>
        <tr><td> <label for="CONTRASEÑA">CONTRASEÑA:</label></td>
            <td><input type="password" id="CONTRASEÑA" name="clave" /><br><br></tr></td>
    </div>
    
    <div>
        
        <tr><td><div class="button">
                    <button type="submit">Ingresar</button></td>
            <td><button type="button" onclick="location.href='index.php'">Cancelar</button></tr></td>
        
     </div>

</table>
</form>
