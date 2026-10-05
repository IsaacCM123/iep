<?php
	require __DIR__ . '/../../core/1_conexion.php';

	$variableIde = $_POST['idIglesiaUpdate_Post'];
	$variableIgl = $_POST['iglesiaUpdate_Post'];
	$variableCiu = $_POST['ciudadUpdate_Post'];
	$variablePai = $_POST['paisUpdate_Post'];
	$variableZon = $_POST['zonaUpdate_Post'];

	$consultaActualizar = $conexion->prepare(
		"UPDATE tbl_iglesia
		SET 	nombreIglesia=?,ciudad=?,pais=?,zona=?
		WHERE 	idIglesia=?"
	);

	$consultaActualizar->bind_param('sssis',$variableIgl,$variableCiu,$variablePai,$variableZon,$variableIde);

	$consultaActualizar->execute();
	$consultaActualizar->close();
	mysqli_close($conexion);
	header('location: ../../../public/html/11_GestionarListaIglesia_HTML.html');
	exit;
?>