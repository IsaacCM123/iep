<?php
	require __DIR__ . '/../../core/1_conexion.php';

	$variableMESA = $_POST['ASIGNAR_MESA_POST'];
	$variableDNI = $_POST['ASIGNAR_MESA_PASTOR_DNI_POST'];

	$consultaActualizar = $conexion->prepare(
		"UPDATE tbl_pastor
		SET 	FK_idMesa=?
		WHERE 	dniPastor=?"
	);

	$consultaActualizar->bind_param('ss',$variableMESA,$variableDNI);

	$consultaActualizar->execute();
	$consultaActualizar->close();
	mysqli_close($conexion);
	header('Location:../../../public/html/23_ConstruirDelegacionDePastorAdm_HTML.html?DNI_PASTOR_DELEGACION_GET='.$variableDNI);
	exit;
?>