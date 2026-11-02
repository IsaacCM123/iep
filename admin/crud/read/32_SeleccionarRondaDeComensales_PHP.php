<?php
require __DIR__ . '/../../core/1_conexion.php';

$guardarResultadoDeLaConsulta=mysqli_fetch_assoc(mysqli_query($conexion,'SELECT ronda FROM tbl_ronda LIMIT 1'));

mysqli_close($conexion);
echo json_encode($guardarResultadoDeLaConsulta);
exit;
?>