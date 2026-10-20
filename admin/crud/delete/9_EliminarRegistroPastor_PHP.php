<?php
	require __DIR__ . '/../../core/1_conexion.php';

	$dniCopia=$_POST['DNI_PASTOR_DELETE_POST'];

	$consultaEliminar=$conexion->prepare("DELETE FROM tbl_pastor WHERE dniPastor=?");
	$consultaEliminar->bind_param('s',$dniCopia);
	
	$consultaEliminar->execute();

	$consultaEliminar->close();
	mysqli_close($conexion);

	header('Location: ../../../public/html/6_GestionarListaPastor_HTML.html');
	exit;
?>