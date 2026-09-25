<?php
    require __DIR__ . '/../../core/1_conexion.php';

    $mensaje = "";

    if($_SERVER["REQUEST_METHOD"]==="POST"){

    $dni        = trim($_POST['DNI_POST']       ?? "");
    $nombre     = trim($_POST['NOMBRE_POST']    ?? "");
    $categoria  = trim($_POST['CATEGORIA_POST'] ?? "");
    $extra      = trim($_POST['EXTRA_POST']     ?? "");
    $telefono   = trim($_POST['TEL_POST']       ?? "");
    $mesa       = trim($_POST['MESA_POST']      ?? "");

    $sql = "INSERT INTO tbl_pastor(dniPastor,nombreCompleto,categoria,extra,telefono,FK_idMesa)VALUES(?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conexion, $sql);
    mysqli_stmt_bind_param($stmt, "ssssss", $dni,$nombre,$categoria,$extra,$telefono,$mesa);

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}
mysqli_close($conexion);
header('location:../../../public/html/6_GestionarListaPastor_HTML.html');
?>