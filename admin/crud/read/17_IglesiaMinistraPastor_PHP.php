<?php
require __DIR__ . '/../../core/1_conexion.php';

$peticionAlServidor =   "SELECT i.idIglesia,i.nombreIglesia,i.ciudad,i.pais,i.zona,p.dniPastor,p.nombreCompleto,p.categoria,p.telefono
                        FROM tbl_iglesia i
                        LEFT JOIN tbl_ministerio m ON m.PKFK_idIglesia = i.idIglesia
                        LEFT JOIN tbl_pastor p     ON p.dniPastor = m.FK_dniPastor";

$resultado = mysqli_query($conexion,$peticionAlServidor);
$HTML = "";
if($resultado){
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $HTML .="<tr>";
        $HTML .="<td>".$fila['idIglesia']."</td>";
        $HTML .="<td>".$fila['nombreIglesia']."</td>";
        $HTML .="<td>".$fila['ciudad']."</td>";
        $HTML .="<td>".$fila['pais']."</td>";
        $HTML .="<td>".$fila['zona']."</td>";
        $HTML .="<td>MINISTRA</td>";
        $HTML .="<td>".$fila['dniPastor']."</td>";
        $HTML .="<td>".$fila['nombreCompleto']."</td>";
        $HTML .="<td>".$fila['categoria']."</td>";
        $HTML .="<td>".$fila['telefono']."</td>";
        $HTML .="</tr>";}
}
mysqli_close($conexion);
echo json_encode($HTML, JSON_UNESCAPED_UNICODE);
?>