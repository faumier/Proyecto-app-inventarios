<!DOCTYPE html>
<html>
<head>
    <title>REGISTRAR USUARIO | Bienvenidos</title>
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
                     <li><a href="login.php">Ingresar</a></li>
                    <li class="actual"><a href="registrar_usuario.php">Registrarse</a></li>
                   
                </ul>
            </nav>
        </div>
    </header>
    
    <form action="../modelo/crear_empleado.php" method="post">
        <h1>REGISTRAR EMPLEADO</h1>

        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" />
        </div>
        
         <div>
            <label for="nombre">Apellido:</label>
            <input type="text" name="apellido" />
        </div>

        <div>
	       <label for="ID">Documento:</label>
            <input type="text" name="documento" />
        </div>

        

        <div>
	       <label for="Contraseña">Clave:</label>
               <input type="password" name="clave" />
        </div>

        <div>
	       <label for="Edad">Cargo:</label>
            <input type="text" name="cargo" />
         </div>

        <div>	
            <label for="Direccion">Dpartmento:</label>
            <input type="text" name="departamento" />
        </div>

        <div>
	       <label for="Telefono">Sede:</label>
            <input type="text" name="sede" />
        </div>

        <div>
            <label for="mail">E-mail:</label>
            <input type="email" name="correo" />
        </div>

    <div>
        <label for="Rol">Horario:</label>
        <select id="rol" name="horario" onchange="elegir_rol;">
            <option value="ninguno">Seleccionar</option>
            <option value="7am-5pm">7am-5pm</option>
            <option value="8am-6pm">8am-6pm</option>
            <option value="9am-7p">9am-7pm</option>
        </select>

    </div>
    <div class="button">
        <button type="submit">Registrar</button><button type="button" onclick="location.href='index.php'">Cancelar</button>
    </div>
    </form>



