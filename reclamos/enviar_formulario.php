<?php

include 'config.php';

$agente = $_POST["agente"];
$sector = $_POST["sector"];
$pedido = $_POST["pedido"];
$detalles = $_POST["detalles"];

date_default_timezone_set('America/Argentina/Buenos_Aires');

$fecha_reclamo = date('Y/m/d H:i', time());


mysqli_query($conexion, "INSERT INTO reclamos(agente, sector, pedido, detalles, fecha_reclamo, estado) VALUES ('$agente','$sector','$pedido','$detalles','$fecha_reclamo','En espera')");

echo $fecha_reclamo;

?>