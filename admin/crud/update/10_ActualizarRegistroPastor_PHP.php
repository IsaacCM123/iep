<?php
	require __DIR__ . '/../../core/1_conexion.php';

	$variableDni = $_POST['dniUpdate_POST'];
	$variableNom = $_POST['nombreUpdate_POST'];
	$variableCat = $_POST['categoriaUpdate_POST'];
	$variableExt = $_POST['extraUpdate_POST'];
	$variableTel = $_POST['telefonoUpdate_POST'];
	$variableMes = $_POST['mesaUpdate_POST'];

	$consultaActualizar = $conexion->prepare(
		"UPDATE tbl_pastor
		SET 	nombreCompleto = ?, categoria = ?, extra = ?, telefono = ?, FK_idMesa = ?
		WHERE 	dniPastor = ?"
	);

	$consultaActualizar->bind_param('ssssss',$variableNom,$variableCat,$variableExt,$variableTel,$variableMes,$variableDni);

	$consultaActualizar->execute();
	$consultaActualizar->close();
	mysqli_close($conexion);
	header('location: ../../../public/html/6_GestionarListaPastor_HTML.html');
	exit;
?>