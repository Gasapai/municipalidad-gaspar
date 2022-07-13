<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi reclamo</title>
</head>
<body>
    <form action="ver_reclamo.php" method="POST">
        <input type="number" name="numero_reclamo">
        <input type="submit">
    </form>
</body>
</html>

<?php

include "config.php";

if(isset($_POST["numero_reclamo"])){
    $numero_reclamo = $_POST["numero_reclamo"];

    $query = "SELECT `id`, `agente`, `sector`, `pedido`, `detalles`, `fecha_reclamo`, `estado`, `fecha_finalizado`, `observaciones` FROM `reclamos` WHERE id='$numero_reclamo'";

    $reclamo = mysqli_query($conexion, $query);

    $reclamo = mysqli_fetch_assoc($reclamo);

    echo "<table>";
        echo "<tr>";

            echo "<center>";
            echo "<table>";
            echo "<td>Nº de reclamo</td>";
            echo "<td>Agente</td>";
            echo "<td>Reclamo</td>";
            echo "<td>detalles</td>";
            echo "<td>fecha_reclamo</td>";
            echo "<td>estado</td>";
            echo "<td>fecha_finalizado</td>";
            echo "<td>observaciones</td>";

        echo "</tr>";
        echo "<tr>";

            echo"<td>";
                echo $reclamo['id'];
            echo"</td>";

            echo"<td>";
                echo $reclamo['agente'];
            echo"</td>";

            echo"<td>";
                echo $reclamo['sector'];
            echo"</td>";
         
            echo"<td>";
                echo $reclamo['pedido'];
            echo"</td>";

            echo"<td>";
                echo $reclamo['detalles'];
            echo"</td>";

            echo"<td>";
                echo $reclamo['fecha_reclamo'];
            echo"</td>";
            
            echo"<td>";
                echo $reclamo['estado'];
            echo"</td>";
            
            echo"<td>";
                echo $reclamo['fecha_finalizado'];
            echo"</td>";

            echo"<td>";
                echo $reclamo['observaciones'];
            echo"</td>";


        echo "</tr>";
    echo "</table>";


}else{}

?>

<a href="index.html" >Volver</a>