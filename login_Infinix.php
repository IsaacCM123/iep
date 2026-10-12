<?php
	$nomUsrRECIBIDO = $_POST['nomUsrPOST'];
	$pasUsrRECIBIDO = $_POST['pasUsrPOST'];

	$nomAdmRECIBIDO = $_POST['nomAdmPOST'];
	$pasAdmRECIBIDO = $_POST['pasAdmPOST'];

	if($nomUsrRECIBIDO === getenv('NAME_USR_LOCK') && $pasUsrRECIBIDO === getenv('PASS_USR_LOCK')){
		header("Location:probando.html");
		exit();
	}
	else if($nomAdmRECIBIDO === getenv('NAME_ADM_LOCK') && $pasAdmRECIBIDO === getenv('PASS_ADM_LOCK')){
		header("Location:probando.html");
	 	exit();
	}
	else{
		header("Location:index.html");
		exit();
	}
	exit();
?>