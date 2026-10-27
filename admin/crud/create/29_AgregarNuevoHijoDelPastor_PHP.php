<?php
    require __DIR__ . '/../../core/1_conexion.php';

    if($_SERVER["REQUEST_METHOD"]==="POST"){

    $NOMBRE_HIJO    = trim($_POST['NOMBRE_HIJO_POST']       ?? "");
    $DNI_PASTOR     = trim($_POST['DNI_PASTOR_HIJO_POST']   ?? "");
    $MESA_HIJO      = trim($_POST['MESA_HIJO_POST']         ?? "");

    $sql = "INSERT INTO tbl_hijo(nombreHijo,FK_dniPastor,FK_idMesa)VALUES(?,?,?)";
    $stmt = mysqli_prepare($conexion, $sql);
    mysqli_stmt_bind_param($stmt, "sss",$NOMBRE_HIJO,$DNI_PASTOR,$MESA_HIJO);

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}
mysqli_close($conexion);
header('Location:../../../public/html/23_ConstruirDelegacionDePastorAdm_HTML.html?DNI_PASTOR_DELEGACION_GET='.$DNI_PASTOR);
exit;
?>