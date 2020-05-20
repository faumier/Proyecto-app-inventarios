    <?php
        
       require 'conectorBD.php';
        $conexion=  conexion();


        $nombre_producto=$_POST["nombre"];

        $sql= "SELECT * FROM  articulo WHERE nombre LIKE '%$nombre_producto%'";
        $consulta=$conexion->query($sql);
                
        //$conteo=$consulta->num_rows;

        
        
        while ($articulo= mysqli_fetch_object($consulta)){
             
            echo $articulo->id; 
            echo $articulo->nombre;
            echo $articulo->color ;
            echo $articulo->talla ;
            echo $articulo->modelo ;
            echo $articulo->preciounitario ;
            echo $articulo->existenciamin ;
            echo $articulo->existenciamax ;
        }
        
        
      
        
        