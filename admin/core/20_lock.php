<?php
	$nomOprRECIBIDO = $_POST['nomOprPOST'];
	$pasOprRECIBIDO = $_POST['pasOprPOST'];

	$nomAdmRECIBIDO = $_POST['nomAdmPOST'];
	$pasAdmRECIBIDO = $_POST['pasAdmPOST'];

	if($nomOprRECIBIDO === getenv('NAME_USR_LOCK') && $pasOprRECIBIDO === getenv('PASS_USR_LOCK')){
		header("Location:../../main/Operario/21_Operario_HTML.html");
		exit;
	}
	else if($nomAdmRECIBIDO === getenv('NAME_ADM_LOCK') && $pasAdmRECIBIDO === getenv('PASS_ADM_LOCK')){
		header("Location:../../main/Administrador/22_Administrador_HTML.html");
	 	exit;
	}
	else{
		header("Location:../../index.html");
		exit;
	}
	exit;
?>