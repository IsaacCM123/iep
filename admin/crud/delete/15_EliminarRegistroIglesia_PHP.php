<?php
	require __DIR__ . '/../../core/1_conexion.php';

	$idIglesiaCopia=$_POST['ID_IGLESIA_DELETE_POST'];

	$consultaEliminar=$conexion->prepare("DELETE FROM tbl_iglesia WHERE idIglesia=?");
	$consultaEliminar->bind_param('s',$idIglesiaCopia);
	
	$consultaEliminar->execute();

	$consultaEliminar->close();
	mysqli_close($conexion);
	header('Location: ../../../public/html/11_GestionarListaIglesia_HTML.html');
	exit;
?>