<?php
require __DIR__ . '/../core/1_conexion.php';

$dni = $_POST['dniPOST'];
$nombre = $_POST['nombrePOST'];

$Seleccionar = "SELECT categoria,extra,telefono,FK_idMesa from tbl_pastor where dniPastor = '$dni'";

$resultado = mysqli_query($conexion, $Seleccionar);
$HTML = '';
if($resultado){
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $HTML       .= "<tr>";
        $HTML       .= "<td>".$dni."</td>";
        $HTML       .= "<td>".$nombre."</td>";
        $HTML       .= "<td>".$fila['categoria']."</td>";
        $HTML       .= "<td>".$fila['extra']."</td>";
        $HTML       .= "<td>".$fila['telefono']."</td>";
        $HTML       .= "<td>".$fila['FK_idMesa']."</td>";
        $HTML       .= "</tr>";
    }
} 
else {echo "Error en la consulta: " . mysqli_error($conexion);}
mysqli_close($conexion);
echo json_encode($HTML, JSON_UNESCAPED_UNICODE);
?>