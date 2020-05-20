<?php
require 'conectorBD.php';

$conexion=  conexion();

$id_empleado=$_POST["id_usuario"];

$sql="SELECT * FROM empleado WHERE id='$id_empleado'";
 
$resultado=$conexion->query($sql);

?>

<table>
    
    <thead>
        <tr>
            <th>ID</th>
            <th>CARGO</th>
            <th>DEPARTAMENTO</th>
            <th>SEDE</th>
            <th>HORARIO</th>
        </tr>

    </thead>
    
<?php foreach ($resultado as $row){ ?>
    <tr> 
        <td><?php echo $row ['id']; ?></td>
        <td><?php echo $row ['cargo']; ?></td>
        <td><?php echo $row ['departamento']; ?></td>
        <td><?php echo $row ['sede']; ?></td>
        <td><?php echo $row ['horario']; ?></td>
    </tr>
     <?php
        }
    ?>
    
</table>
  
    
    
    
}?>
    
   
</table>
