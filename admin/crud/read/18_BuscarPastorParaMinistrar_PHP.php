<?php
require __DIR__ . '/../../core/1_conexion.php';

$Seleccionar = "SELECT dniPastor,nombreCompleto,categoria FROM tbl_pastor";

//keyup para buscar nombre desde campo de texto nombrePOST ...................................
$N_M = isset($_POST['nombreMinistroPostParaPHP']) ? $conexion->real_escape_string($_POST['nombreMinistroPostParaPHP']) : null;
    if ($N_M != null)
    {
       $Seleccionar = "SELECT dniPastor,nombreCompleto,categoria FROM tbl_pastor WHERE nombreCompleto LIKE '%".$N_M."%'";
    }
//............................................................................................

$resultado = mysqli_query($conexion, $Seleccionar);
$HTML = '';
if($resultado){
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $HTML       .= "<tr onclick='copiarDatosMinistro(this)'>";
        $HTML       .= "<td>".$fila['dniPastor']."</td>";
        $HTML       .= "<td>".$fila['nombreCompleto']."</td>";
        $HTML       .= "<td>".$fila['categoria']."</td>";
        $HTML       .= "</tr>";}
}
mysqli_close($conexion);
echo json_encode($HTML, JSON_UNESCAPED_UNICODE);
?>