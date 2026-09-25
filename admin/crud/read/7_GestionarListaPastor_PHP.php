<?php
require __DIR__ . '/../../core/1_conexion.php';
$EjecutarConsulta = 'SELECT dniPastor,nombreCompleto FROM tbl_pastor';
$CargarValoresDeLaconsulta = mysqli_query($conexion,$EjecutarConsulta);
$HTML='';
if ($CargarValoresDeLaconsulta)
{
    while($fila=mysqli_fetch_assoc($CargarValoresDeLaconsulta))
    {
        $HTML .="<tr>";
        $HTML .="<td>".$fila['dniPastor']."</td>";
        $HTML .="<td>".$fila['nombreCompleto']."</td>";
        $HTML .="<td><ion-icon name='reader-sharp'></ion-icon></td>";
        $HTML .="<td><ion-icon name='remove-circle-sharp'></ion-icon></td>";
        $HTML .="<td><a id='W'href='Eliminar.php?dniPastor=".$fila['dniPastor']."'><ion-icon name='trash-sharp'></ion-icon></a></td>";
        $HTML .="</tr>";
    }
}
mysqli_close($conexion);
echo json_encode($HTML, JSON_UNESCAPED_UNICODE);
?>