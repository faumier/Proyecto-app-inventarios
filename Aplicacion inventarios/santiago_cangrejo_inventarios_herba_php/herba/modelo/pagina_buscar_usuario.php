<!DOCTYPE html>

<html>
    <head>
        <title>Sistema de inventarios | Bienvenidos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Sistema de inventario">
	<meta name="keywords" content="Invenarios, control, pedidos">
	<meta name="author" content="Calceteria Herva">
        <link rel="stylesheet" type="text/css" href="../vista/CSS/nuevo_estilos.css">
          <style>
            td{
                text-align: center;
                
            }
            
        </style>
    </head>
    <body>  
        
        <?php 
    
    session_start();
    
    if (!isset($_SESSION["usuario"])){
        
        header("location:../vista/login.php");
    }
    
    ?>
        
        
        <?php
        
       require 'conectorBD.php';
        $conexion=  conexion();


        $id=$_POST["id"];

        $sql= "SELECT * FROM  cliente WHERE id=$id";
        $consulta=$conexion->query($sql);
                
        $conteo=$consulta->num_rows;

            

if($conteo==0){
    
     $sql= "SELECT * FROM  empleado WHERE id=$id";
     $consulta=$conexion->query($sql);
                
     $conteo2=$consulta->num_rows;
     
     while ($articulo= mysqli_fetch_object($consulta)):?>
            
            
            <table id="tabla_crud" style="border: solid 1px ">
            <tr>
                
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>CARGO</th>
                <th>DEPARTAMENTO</th>
                <th>SEDE</th>
                <th>HORARIO</th>
                <th>EMAIL</th>
                             
            </tr>
      
            
            <tr>
                               
                <td><?php echo $articulo->id ?></td>
                <td><?php echo $articulo->nombre ?></td>
                <td><?php echo $articulo->apellido ?></td>
                <td><?php echo $articulo->cargo ?></td>
                <td><?php echo $articulo->departamento ?></td>
                <td><?php echo $articulo->sede ?></td>
                <td><?php echo $articulo->horario ?></td>
                <td><?php echo $articulo->email ?></td>
                <td><button onclick="location.href='../vista/modificar_usuario_empleado.php'">Modificar</button></td>
                <td><button onclick="location.href='Borrar_empleado.php'">Eliminar</button></td><br><br> 
                
            
            </tr>
            
         
    <?php endwhile;
    
    
              
        
if($conteo2==0){
    
    echo "No exite usuario con ese nombre";
    
}  ?>     
            
    <?php
}  else {
    
    while ($articulo= mysqli_fetch_object($consulta)):?>
            
            
            <table id="tabla_crud" style="border: solid 1px ">
            <tr>
                
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>NOMBRE EMPRESA</th>
                <th>CREDITO</th>
                <th>DIRECCION</th>
                <th>EMAIL</th>
                <th>TELEFONO</th>
                             
            </tr>
      
            
            <tr>
                               
                <td><?php echo $articulo->id ?></td>
                <td><?php echo $articulo->nombre ?></td>
                <td><?php echo $articulo->apellido ?></td>
                <td><?php echo $articulo->nombreempresa ?></td>
                <td><?php echo $articulo->credito ?></td>
                <td><?php echo $articulo->direccion ?></td>
                <td><?php echo $articulo->email ?></td>
                <td><?php echo $articulo->telefono ?></td>
                <td><button onclick="location.href='../vista/modificar_usuario_cliente.php'">Modificar</button></td>
                <td><button onclick="location.href='Borrar_cliente.php'">Eliminar</button></td><br><br> 
            
            </tr>
            
         
    <?php endwhile;
}

$conexion->close();
?>
                       
            </table><br><br>
        
            <button onclick="location.href='../vista/consultar_usuario.php'">Regresar</button>
    </body>
</html>
    