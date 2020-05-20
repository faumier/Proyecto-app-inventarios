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
        
       require 'conectorBD.php';
        $conexion=  conexion();


        $id_empleado=$_POST["id_empleado"];

        $sql= "SELECT * FROM requisiciondemercancia WHERE requisiciondemercancia.idEmpleado LIKE '%$id_empleado%'";
        $consulta=$conexion->query($sql);
                
        $conteo=$consulta->num_rows;
        
            

if($conteo==0){
    
    echo "No exite requisicion de ese empleado";?>
              
        
        
            
    <?php
}  else {
    
    while ($articulo= mysqli_fetch_object($consulta)):?>
            
            
            <table id="tabla_crud" style="border: solid 1px ">
            <tr>
                
                <th>DOCUMENTO EMPLEADO</th>
                <th>FECHA DE REALIZADA</th>
                <th>FECHA DE ENTREGA</th>
                <th>CODIGO ARTICULO</th>
                <th>CANTIDAD DEL ARTICULO</th>
                
                             
            </tr>
      
            
            <tr>
                               
                <td><?php echo $articulo->idEmpleado ?></td>
                <td><?php echo $articulo->fecha ?></td>
                <td><?php echo $articulo->fecha_entrega ?></td>
                <td><?php echo $articulo->idArticulo?></td>
                <td><?php echo $articulo->cantidad?></td>
                <td><button onclick="location.href='../vista/modificar_requisicion.php?id=<?php echo $articulo->id ?>'">Modificar</button></td>
                <td><button onclick="location.href='Borrar_requisicion.php?id=<?php echo $articulo->id ?>'" >Eliminar</button></td><br><br> 
            
            </tr>
            
         
    <?php endwhile;
}

$conexion->close();
?>
                       
            </table><br><br>
        
            <button onclick="location.href='../vista/consulta_requisicion.php'">Regresar</button>
    </body>
</html>
