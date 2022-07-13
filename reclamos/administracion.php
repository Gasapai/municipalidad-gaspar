<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración</title>
</head>
<body>
    <header>
        <h2>Reclamos</h2>

        <nav>

        </nav>

    </header>

    
    <?php 
        include 'config.php';

        $query= "SELECT * FROM reclamos";
        $result = mysqli_query($conexion, $query);

        echo "<center>";
        echo "<table>";
        echo "<td></td>";
        echo "<td>Nro de reclamo</td>";
        echo "<td>Agente</td>";
        echo "<td>Reclamo</td>";
        echo "<td>detalles</td>";
        echo "<td>fecha_reclamo</td>";
        echo "<td>estado</td>";
        echo "<td>fecha_finalizado</td>";
        echo "<td>observaciones</td>";
        

        while($registro = mysqli_fetch_assoc($result)){

            echo "<tr>";

            echo '<td>';       
            echo '<input type="checkbox" name="checks[]" value='.$registro['id'].'>';        
            echo '</td>' ;


            echo "<td>";    
                echo $registro['id'];
            echo "</td>";
            echo "<td>";
                echo $registro['agente'];
            echo "</td>";
            echo "<td>";
                echo $registro['pedido'];
            echo "</td>";
            echo "<td>";
                echo $registro['detalles'];
            echo "</td>";
            echo "<td>";
                echo $registro['fecha_reclamo'];
            echo "</td>"; 

            echo "<td>";
            echo $registro['estado'];
            echo "</td>"; 

            echo "<td>" ;
            echo $registro['fecha_finalizado'];
            echo "</td>"; 

            echo "<td>";
            echo $registro['observaciones'];
            echo "</td>"; 
        
            echo "</tr>";
        
        }
        echo "</table>";
        echo "</center>";
    ?>
    
</body>
</html>
