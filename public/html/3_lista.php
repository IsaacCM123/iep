<?php
require __DIR__ . '/../../admin/core/1_conexion.php';
$Seleccionar = "SELECT nombreCompleto, dniPastor FROM tbl_pastor";

//keyup para buscar nombre desde campo de texto N.............................................
$N_C = isset($_POST['N']) ? $conexion->real_escape_string($_POST['N']) : null;
    if ($N_C != null)
    {
       $Seleccionar = "SELECT nombreCompleto FROM tbl_pastor WHERE nombreCompleto LIKE '%".$N_C."%'";
    }
//............................................................................................


$resultado = mysqli_query($conexion, $Seleccionar);
$HTML = '';
if ($resultado) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $HTML       .= "<tr align='center'>";
        $HTML       .= "<td>".$fila['dniPastor']."</td>";
        $HTML       .= "<td onclick='obtenerDato(this)'>".$fila['nombreCompleto']."</td>";
        $HTML       .= "</tr>";
    }
} else {
    echo "Error en la consulta: " . mysqli_error($conexion);
}
//mysqli_close($conexion);
echo json_encode($HTML, JSON_UNESCAPED_UNICODE);
?>