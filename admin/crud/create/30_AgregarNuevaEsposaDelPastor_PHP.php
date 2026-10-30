<?php
    require __DIR__ . '/../../core/1_conexion.php';

    if($_SERVER["REQUEST_METHOD"]==="POST"){

    $NOMBRE_ESPOSA  =trim($_POST['NOMBRE_ESPOSA_POST']      ?? "");
    $DNI_PASTOR     =trim($_POST['DNI_PASTOR_ESPOSA_POST']  ?? "");
    $MESA_ESPOSA    =trim($_POST['MESA_ESPOSA_POST']        ?? "");

    $sql = "INSERT INTO tbl_esposa(nombreEsposa,FK_dniPastor,FK_idMesa)VALUES(?,?,?)";
    $stmt = mysqli_prepare($conexion,$sql);
    mysqli_stmt_bind_param($stmt,"sss",$NOMBRE_ESPOSA,$DNI_PASTOR,$MESA_ESPOSA);

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}
mysqli_close($conexion);
header('Location:../../../public/html/23_ConstruirDelegacionDePastorAdm_HTML.html?DNI_PASTOR_DELEGACION_GET='.$DNI_PASTOR);
exit;
?>