<?php
	require __DIR__ . '/../../core/1_conexion.php';

	$variableIde = $_POST['ID_IGLESIA_UPDATE_POST'];
	$variableIgl = $_POST['IGLESIA_UPDATE_POST'];
	$variableCiu = $_POST['CIUDAD_UPDATE_POST'];
	$variablePai = $_POST['PAIS_UPDATE_POST'];
	$variableZon = $_POST['ZONA_UPDATE_POST'];

	$consultaActualizar = $conexion->prepare(
		"UPDATE tbl_iglesia
		SET 	nombreIglesia=?,ciudad=?,pais=?,zona=?
		WHERE 	idIglesia=?"
	);

	$consultaActualizar->bind_param('sssis',$variableIgl,$variableCiu,$variablePai,$variableZon,$variableIde);

	$consultaActualizar->execute();
	$consultaActualizar->close();
	mysqli_close($conexion);
	header('Location: ../../../public/html/11_GestionarListaIglesia_HTML.html');
	exit;
?>