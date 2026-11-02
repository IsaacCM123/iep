<?php
require __DIR__ . '/../../core/1_conexion.php';

$variableRonda = $_POST['RONDA_POST'];

$consultaActualizar = $conexion->prepare("UPDATE tbl_ronda SET ronda=? WHERE id='R'");
$consultaActualizar->bind_param('i',$variableRonda);
$consultaActualizar->execute();

header('Location:../../../main/Administrador/22_Administrador_HTML.html');
exit;