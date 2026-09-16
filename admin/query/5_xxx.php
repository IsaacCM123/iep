<?php
require __DIR__ . '/../core/1_conexion.php';

$dni = $_POST['dniPOSTParaPHP'];
$nombre = $_POST['nombrePOSTParaPHP'];

$Seleccionar = "SELECT categoria,extra,telefono,FK_idMesa from tbl_pastor where dniPastor = '$dni'";

$resultado = mysqli_query($conexion, $Seleccionar);
$datos = [];
if($resultado){
    if($fila = mysqli_fetch_assoc($resultado)) {
        $datos = [
            'dni'        => $dni,
            'nombre'     => $nombre,
            'categoria'  => $fila['categoria'],
            'extra'      => $fila['extra'],
            'telefono'   => $fila['telefono'],
            'idMesa'     => $fila['FK_idMesa']
        ];
    }
}
mysqli_close($conexion);
echo json_encode($datos, JSON_UNESCAPED_UNICODE);
?>