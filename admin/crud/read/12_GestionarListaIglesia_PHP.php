<?php
require __DIR__ . '/../../core/1_conexion.php';

$resultado = mysqli_query($conexion, "SELECT idIglesia,nombreIglesia,ciudad,pais,zona FROM tbl_iglesia ORDER BY nombreIglesia ASC");
$HTML = "";
if($resultado){
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $HTML       .= "<tr>";
        $HTML       .= "<td>".$fila['idIglesia']."</td>";
        $HTML       .= "<td>".$fila['nombreIglesia']."</td>";
        $HTML       .= "<td>".$fila['ciudad']."</td>";
        $HTML       .= "<td>".$fila['pais']."</td>";
        $HTML       .= "<td>".$fila['zona']."</td>";
        $HTML       .= "</tr>";}
}
mysqli_close($conexion);
echo json_encode($HTML, JSON_UNESCAPED_UNICODE);
?>