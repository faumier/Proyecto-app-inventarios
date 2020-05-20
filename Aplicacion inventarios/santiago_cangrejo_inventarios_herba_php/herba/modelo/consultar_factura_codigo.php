



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

        $id_empleado=$_GET["id"];
        
        $sql="SELECT pedidos.idCliente, pedidos.fecha_entrega, ventas.fecha,

        (((ventas.impuesto*(SUM(pedidos.cantidadDelArticulo*articulo.preciounitario)))
        +SUM(pedidos.cantidadDelArticulo*articulo.preciounitario))-(ventas.descuento*(SUM(pedidos.cantidadDelArticulo*articulo.preciounitario))))AS total_pagar,
        SUM(pedidos.cantidadDelArticulo*articulo.preciounitario) AS total FROM pedidos JOIN detallepedido ON pedidos.id=detallepedido.idPedido 
        JOIN articulo ON detallepedido.idArticulo=articulo.id JOIN ventas ON pedidos.idCliente=ventas.IdCliente WHERE pedidos.idCliente=$id_empleado";

        
       $consulta=$conexion->query($sql);
               
       $conteo=$consulta->num_rows;
        
        

            

if($conteo==0){
    
    
    
    echo "<script>alert('No existe factura de venta de ese cliente');   </script>";?>
              
        
        
            
    <?php
}  else {
    
    while ($articulo= mysqli_fetch_object($consulta)):?>
            
            
            <table id="tabla_crud" style="border: solid 1px ">
            <tr>
                
                <th>DOCUMENTO CLIENTE</th>
                <th>FECHA DE EXPEDICION</th>
                <th>FECHA DE ENTREGA</th>
                <th>TOTAL SIN INPUESTOS NI DESCUENTOS</th>
                <th>TOTAL</th>
                                             
            </tr>
      
            
            <tr>
                               
                <td><?php echo $articulo->idCliente ?></td>
                <td><?php echo $articulo->fecha ?></td>
                <td><?php echo $articulo->fecha_entrega ?></td>
                <td><?php echo $articulo->total ?></td>
                <td><?php echo $articulo->total_pagar ?></td>
                <td><button onclick="location.href='Borrar_factura.php?id=<?php echo $articulo->idCliente ?>'" >Eliminar</button></td><br><br> 
                      
            </tr>
            
            <?php $total=$articulo->total_pagar ?>
   
    <?php endwhile;
}

$conexion->query("UPDATE ventas SET total=$total WHERE ventas.idCliente=$id_empleado");
    
$conexion->close();
?>
                       
            </table><br><br>
        
            <button onclick="location.href='../vista/consultar_factura.php'">Regresar</button>
    </body>
</html>


         
  
