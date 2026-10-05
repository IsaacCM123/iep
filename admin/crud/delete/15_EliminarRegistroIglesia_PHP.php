<?php
	require __DIR__ . '/../../core/1_conexion.php';

	$idIglesiaCopia=$_POST['idIglesiaDeletePOST'];

	$consultaEliminar=$conexion->prepare("DELETE FROM tbl_iglesia WHERE idIglesia=?");
	$consultaEliminar->bind_param('s',$idIglesiaCopia);
	
	$consultaEliminar->execute();

	$consultaEliminar->close();
	mysqli_close($conexion);

	header('location: ../../../public/html/11_GestionarListaIglesia_HTML.html');
?>