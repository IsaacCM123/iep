<?php
    require __DIR__ . '/../../core/1_conexion.php';

    if($_SERVER["REQUEST_METHOD"]==="POST"){

    $dni_Pastor       = trim($_POST['DNI_PASTOR_POST']    ?? "");
    $id_Anfitrion     = trim($_POST['ID_ANFITRION_POST']  ?? "");

    $sql = "INSERT INTO tbl_hospedaje(FK_dniPastor,FK_idAnfitrion)VALUES(?,?)";
    $stmt = mysqli_prepare($conexion, $sql);
    mysqli_stmt_bind_param($stmt, "si",$dni_Pastor,$id_Anfitrion);

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}
mysqli_close($conexion);
header('Location:../../../public/html/23_ConstruirDelegacionDePastorAdm_HTML.html?DNI_PASTOR_DELEGACION_GET='.$dni_Pastor);
exit;
?>