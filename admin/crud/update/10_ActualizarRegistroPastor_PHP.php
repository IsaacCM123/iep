<?php
	require __DIR__ . '/../../core/1_conexion.php';

	$variableDni = $_POST['DNI_PASTOR_UPDATE_POST'];
	$variableNom = $_POST['NOMBRE_PASTOR_UPDATE_POST'];
	$variableCat = $_POST['CATEGORIA_PASTOR_UPDATE_POST'];
	$variableExt = $_POST['EXTRA_PASTOR_UPDATE_POST'];
	$variableTel = $_POST['TELEFONO_PASTOR_UPDATE_POST'];
	$variableMes = $_POST['MESA_PASTOR_UPDATE_POST'];

	if ($variableMes===''){$variableMes = null;}

	$consultaActualizar = $conexion->prepare(
		"UPDATE tbl_pastor
		SET 	nombreCompleto = ?, categoria = ?, extra = ?, telefono = ?, FK_idMesa = ?
		WHERE 	dniPastor = ?"
	);

	$consultaActualizar->bind_param('ssssss',$variableNom,$variableCat,$variableExt,$variableTel,$variableMes,$variableDni);

	$consultaActualizar->execute();
	$consultaActualizar->close();
	mysqli_close($conexion);
	header('Location: ../../../public/html/6_GestionarListaPastor_HTML.html');
	exit;
?>