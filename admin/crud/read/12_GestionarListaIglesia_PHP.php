<?php
require __DIR__ . '/../../core/1_conexion.php';

$peticionAlServidor = "SELECT idIglesia,nombreIglesia,ciudad,pais,zona FROM tbl_iglesia ORDER BY nombreIglesia ASC";

//keyup para buscar nombre desde campo de texto nombrePOST ...................................
$N_I = isset($_POST['nombreIglesiaPostParaPHP']) ? $conexion->real_escape_string($_POST['nombreIglesiaPostParaPHP']) : null;
    if ($N_I != null)
    {
       $peticionAlServidor = "SELECT idIglesia,nombreIglesia,ciudad,pais,zona FROM tbl_iglesia WHERE nombreIglesia LIKE '%".$N_I."%'";
    }
//............................................................................................

$resultado = mysqli_query($conexion,$peticionAlServidor);
$HTML = "";
if($resultado){
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $HTML .="<tr onclick='copiarDatos(this)'>";
        $HTML .="<td>".$fila['idIglesia']."</td>";
        $HTML .="<td>".$fila['nombreIglesia']."</td>";
        $HTML .="<td>".$fila['ciudad']."</td>";
        $HTML .="<td>".$fila['pais']."</td>";
        $HTML .="<td>".$fila['zona']."</td>";
        $HTML .="<td class='actualizarRegistro'><ion-icon name='reader-sharp'></ion-icon></td>";
        $HTML .="<td class='eliminarRegistro'><ion-icon name='trash-sharp'></ion-icon></td>";
        $HTML .="</tr>";}
}
mysqli_close($conexion);
echo json_encode($HTML, JSON_UNESCAPED_UNICODE);
?>