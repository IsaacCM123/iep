<?php
    require __DIR__ . '/../../core/1_conexion.php';

    if($_SERVER["REQUEST_METHOD"]==="POST"){

    $nuevaIglesia   = trim($_POST['IGLESIA_POST']   ?? "");
    $ciudadCopia    = trim($_POST['CIUDAD_POST']    ?? "");
    $paisCopia      = trim($_POST['PAIS_POST']      ?? "");
    $zonaCopia      = trim($_POST['ZONA_POST']      ?? "");

    $sql = "INSERT INTO tbl_iglesia(nombreIglesia,ciudad,pais,zona)VALUES(?, ?, ?, ?)";
    $stmt = mysqli_prepare($conexion, $sql);
    mysqli_stmt_bind_param($stmt, "sssi",$nuevaIglesia,$ciudadCopia,$paisCopia,$zonaCopia);

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}
mysqli_close($conexion);
header('location:../../../public/html/11_GestionarListaIglesia_HTML.html');
?>