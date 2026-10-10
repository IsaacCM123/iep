<?php
	require __DIR__ . '/../../core/1_conexion.php';

	$dniCopia=$_POST['dniParaPhpEliminarPastor_POST'];

	$consultaEliminar=$conexion->prepare("DELETE FROM tbl_pastor WHERE dniPastor=?");
	$consultaEliminar->bind_param('s',$dniCopia);
	
	$consultaEliminar->execute();

	$consultaEliminar->close();
	mysqli_close($conexion);

	header('location: ../../../public/html/6_GestionarListaPastor_HTML.html');
?>