<?php
    require __DIR__ . '/../../core/1_conexion.php';

    if($_SERVER["REQUEST_METHOD"]==="POST"){

        $PKFKidIglesia = trim($_POST['idIglesiaPOST']) ?? "";
        $FKdniPastor   = trim($_POST['dniPastorPOST']) ?? "";

        try {
            if ($FKdniPastor === "") {
                // Sin pastor: se elimina el registro de la iglesia
                $sql = "DELETE FROM tbl_ministerio WHERE PKFK_idIglesia = ?";
                $stmt = mysqli_prepare($conexion, $sql);
                mysqli_stmt_bind_param($stmt, "s", $PKFKidIglesia);
            } else {
                // Con pastor: INSERT, o UPDATE si la iglesia ya existe
                $sql = "INSERT INTO tbl_ministerio (PKFK_idIglesia, FK_dniPastor)
                        VALUES (?, ?)
                        ON DUPLICATE KEY UPDATE
                        FK_dniPastor = VALUES(FK_dniPastor)";
                $stmt = mysqli_prepare($conexion, $sql);
                mysqli_stmt_bind_param($stmt, "ss", $PKFKidIglesia, $FKdniPastor);
            }

            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

        } catch (mysqli_sql_exception $e) {
            die("Error al guardar: " . $e->getMessage());
        }
    }

    mysqli_close($conexion);
    header('location:../../../public/html/16_IglesiaMinistraPastor_HTML.html');
    exit;
?>