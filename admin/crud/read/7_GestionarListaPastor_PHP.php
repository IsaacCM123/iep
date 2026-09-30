<?php
require __DIR__ . '/../../core/1_conexion.php';
$EjecutarConsulta = 'SELECT dniPastor,nombreCompleto,categoria,extra,telefono,FK_idMesa FROM tbl_pastor';

//keyup para buscar nombre desde campo de texto nombrePOST ...................................
$N_C = isset($_POST['ClaveNombrePost_QueryPHP']) ? $conexion->real_escape_string($_POST['ClaveNombrePost_QueryPHP']) : null;
    if ($N_C != null)
    {
		$EjecutarConsulta = "SELECT dniPastor,nombreCompleto,categoria,extra,telefono,FK_idMesa FROM tbl_pastor WHERE nombreCompleto LIKE '%".$N_C."%'";
    }
//............................................................................................

$CargarValoresDeLaconsulta = mysqli_query($conexion,$EjecutarConsulta);
$HTML='';
if ($CargarValoresDeLaconsulta)
{
while($fila=mysqli_fetch_assoc($CargarValoresDeLaconsulta)){
$HTML .="<tr onclick='obtenerDato(this)'>";
$HTML .="<td>".$fila['dniPastor']."</td>";
$HTML .="<td>".$fila['nombreCompleto']."</td>";
$HTML .="<td>".$fila['categoria']."</td>";
$HTML .="<td>".$fila['extra']."</td>";
$HTML .="<td>".$fila['telefono']."</td>";
$HTML .="<td>".$fila['FK_idMesa']."</td>";
$HTML .="<td class='editarRegistro'><ion-icon name='reader-sharp'></ion-icon></td>";
$HTML .="<td><ion-icon name='remove-circle-sharp'></ion-icon></td>";
$HTML .="<td><a class='eliminarRegistro' href='../../admin/crud/delete/9_EliminarPastor.php?DNI=".$fila['dniPastor']."'><ion-icon name='trash-sharp'></ion-icon></a></td>";
$HTML .="</tr>";}
}
mysqli_close($conexion);
echo json_encode($HTML, JSON_UNESCAPED_UNICODE);
?>