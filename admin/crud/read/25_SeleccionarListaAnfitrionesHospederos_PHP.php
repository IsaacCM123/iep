<?php
require __DIR__ . '/../../core/1_conexion.php';
$EjecutarConsulta = 'SELECT     a.PKFK_idPersona,
                                p.nombrePersona
                    FROM        tbl_anfitrion a
                    INNER JOIN  tbl_persona p
                    ON          p.idPersona = a.PKFK_idPersona
                    WHERE NOT EXISTS (SELECT 1
                    FROM        tbl_invitado i
                    WHERE       i.PKFK_idPersona = a.PKFK_idPersona)
                    AND NOT EXISTS (SELECT 1
                    FROM        tbl_visita v
                    WHERE       v.PKFK_idPersona = a.PKFK_idPersona)
                    ORDER BY    p.nombrePersona ASC
                    ';

//keyup para buscar nombre desde campo de texto nombrePOST ...................................
$NOMBRE_ANFITRION = isset($_POST['NOMBRE_ANFITRION_BUSQUEDA_PHP']) ? $conexion->real_escape_string($_POST['NOMBRE_ANFITRION_BUSQUEDA_PHP']) : null;
    if ($NOMBRE_ANFITRION != null)
    {
        $EjecutarConsulta = "SELECT     a.PKFK_idPersona,
                                        p.nombrePersona
                            FROM        tbl_anfitrion a
                            INNER JOIN  tbl_persona p
                            ON          p.idPersona = a.PKFK_idPersona
                            WHERE NOT EXISTS (SELECT 1
                            FROM        tbl_invitado i
                            WHERE       i.PKFK_idPersona = a.PKFK_idPersona)
                            AND NOT EXISTS (SELECT 1
                            FROM        tbl_visita v
                            WHERE       v.PKFK_idPersona = a.PKFK_idPersona)
                            AND         p.nombrePersona LIKE '%".$NOMBRE_ANFITRION."%'
                            ";
    }
//............................................................................................

$CargarValoresDeLaconsulta = mysqli_query($conexion,$EjecutarConsulta);
$HTML='';
if ($CargarValoresDeLaconsulta)
{
while($fila=mysqli_fetch_assoc($CargarValoresDeLaconsulta)){
    $HTML .="<tr onclick='obtenerValoresDeLaFilaClickeada(this)'>";
    $HTML .="<td>".$fila['PKFK_idPersona']."</td>";
    $HTML .="<td>".$fila['nombrePersona']."</td>";
    $HTML .="</tr>";}
}
mysqli_close($conexion);
echo json_encode($HTML, JSON_UNESCAPED_UNICODE);
exit;
?>