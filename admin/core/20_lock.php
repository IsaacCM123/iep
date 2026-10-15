<?php
	$nombreOperario = getenv('NAME_USR_LOCK');
	$passwoOperario = getenv('PASS_USR_LOCK');
	$nombreAdminist = getenv('NAME_ADM_LOCK');
	$passwoAdminist = getenv('PASS_ADM_LOCK');

	$nomOprRECIBIDO = $_POST['nomOprPOST'];
	$pasOprRECIBIDO = $_POST['pasOprPOST'];

	$nomAdmRECIBIDO = $_POST['nomAdmPOST'];
	$pasAdmRECIBIDO = $_POST['pasAdmPOST'];

	if($nomOprRECIBIDO === $nombreOperario && $pasOprRECIBIDO === $passwoOperario){
		header("Location:../../main/Operario/21_Operario_HTML.html");
		exit;}
	else if($nomAdmRECIBIDO === $nombreAdminist && $pasAdmRECIBIDO === $passwoAdminist){
		header("Location:../../main/Administrador/22_Administrador_HTML.html");
	 	exit;}
	else{
		header("Location:../../index.html");
		exit;
	}
	exit;
?>