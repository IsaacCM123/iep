<?php
require __DIR__ . '/../../core/1_conexion.php';

$Seleccionar = "SELECT dniPastor,nombreCompleto,categoria,telefono FROM tbl_pastor ORDER BY nombreCompleto ASC";

//keyup para buscar nombre desde campo de texto nombrePOST ...................................
$N_C = isset($_POST['nombrePOSTEnviarPHP']) ? $conexion->real_escape_string($_POST['nombrePOSTEnviarPHP']) : null;
    if ($N_C != null)
    {
       $Seleccionar = "SELECT dniPastor,nombreCompleto,categoria,telefono FROM tbl_pastor WHERE nombreCompleto LIKE '%".$N_C."%'";
    }
//............................................................................................

$resultado = mysqli_query($conexion, $Seleccionar);
$HTML = '';
if($resultado){
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $HTML       .= "<tr align='center' onclick='obtenerValoresDeLaFilaClickeada(this)'>";
        $HTML       .= "<td>".$fila['dniPastor']."</td>";
        $HTML       .= "<td>".$fila['nombreCompleto']."</td>";
        $HTML       .= "<td>".$fila['categoria']."</td>";
        $HTML       .= "<td>".$fila['telefono']."</td>";
        $HTML       .= "</tr>";}
}
mysqli_close($conexion);
echo json_encode($HTML, JSON_UNESCAPED_UNICODE);
?>