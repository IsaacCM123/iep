<?php
    require __DIR__ . '/../../core/1_conexion.php';

    if($_SERVER["REQUEST_METHOD"]==="POST"){

    $NOMBRE_DELEGADO    = trim($_POST['NOMBRE_DELEGADO_POST']       ?? "");
    $CI_DELEGADO        = trim($_POST['CI_DELEGADO_POST']           ?? "");
    $DNI_PASTOR         = trim($_POST['DNI_PASTOR_DELEGADO_POST']   ?? "");
    $MESA_DELEGADO      = trim($_POST['MESA_DELEGADO_POST']         ?? "");

    $sql = "INSERT INTO tbl_delegado(nombreDelegado,cedulaIdentidad,FK_dniPastor,FK_idMesa)VALUES(?,?,?,?)";
    $stmt = mysqli_prepare($conexion, $sql);
    mysqli_stmt_bind_param($stmt, "ssss",$NOMBRE_DELEGADO,$CI_DELEGADO,$DNI_PASTOR,$MESA_DELEGADO);

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}
mysqli_close($conexion);
header('Location:../../../public/html/23_ConstruirDelegacionDePastorAdm_HTML.html?DNI_PASTOR_DELEGACION_GET='.$DNI_PASTOR);
exit;
?>