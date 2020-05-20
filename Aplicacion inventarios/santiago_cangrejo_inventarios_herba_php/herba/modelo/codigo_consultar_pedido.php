<?php
require 'conectorBD.php';

$conexion=  conexion();

$id_pedido=$_POST["id_pedido"];

$sql="SELECT * FROM cliente WHERE id='$id_pedido'";
 
$resultado=$conexion->query($sql);

?>

<table>
    
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE EMPRESA</th>
            <th>TIPO EMPRESA</th>
            <th>CREDITO</th>
            <th>DIRECCION</th>
            <th>EMAIL</th>
            <th>TELEFONO</th>
        </tr>

    </thead>
    
<?php foreach ($resultado as $row){ ?>
    <tr> 
        <td><?php echo $row ['id']; ?></td>
        <td><?php echo $row ['nombreempresa']; ?></td>
        <td><?php echo $row ['tipoempresa']; ?></td>
        <td><?php echo $row ['credito']; ?></td>
        <td><?php echo $row ['direccion']; ?></td>
        <td><?php echo $row ['email']; ?></td>
        <td><?php echo $row ['telefono']; ?></td>
    </tr>
     <?php
        }
    ?>
    
</table>
  
    
    
    
}?>
    
   
</table>
