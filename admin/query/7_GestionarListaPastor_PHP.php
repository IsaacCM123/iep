<?php
require __DIR__ . '/../core/1_conexion.php';
$EjecutarConsulta = 'SELECT nombreCompleto FROM tbl_pastor';
$CargarValoresDeLaconsulta = mysqli_query($conexion,$EjecutarConsulta);
$HTML='';
if ($CargarValoresDeLaconsulta)
{
    while($fila=mysqli_fetch_assoc($CargarValoresDeLaconsulta))
    {
        $HTML .="<tr>";
        $HTML .="<td>".$fila['nombreCompleto']."</td>";
        $HTML .="</tr>";
    }
}
mysqli_close($conexion);
echo json_encode($HTML, JSON_UNESCAPED_UNICODE);
?>