<?php
require __DIR__ . '/../core/1_conexion.php';

$dni = $_POST['dniPOSTParaPHP'];
$nombre = $_POST['nombrePOSTParaPHP'];

$Seleccionar = "SELECT      p.categoria,
                            p.extra,
                            p.telefono,
                            i.nombreIglesia,
                            i.ciudad,
                            i.pais,
                            m.nombreMesa,
                            per.nombrePersona,
                            a.celular,
                            e.nombreEsposa
                            
                FROM        tbl_pastor p
                LEFT JOIN   tbl_ministerio mi ON mi.FK_dniPastor    = p.dniPastor
                LEFT JOIN   tbl_iglesia i     ON i.idIglesia        = mi.PKFK_idIglesia
                LEFT JOIN   tbl_esposa e      ON e.FK_dniPastor     = p.dniPastor
                LEFT JOIN   tbl_hospedaje h   ON h.FK_dniPastor     = p.dniPastor
                LEFT JOIN   tbl_anfitrion a   ON a.PKFK_idPersona   = h.FK_idAnfitrion
                LEFT JOIN   tbl_persona per   ON per.idPersona      = a.PKFK_idPersona
                LEFT JOIN   tbl_mesa m        ON m.idMesa           = p.FK_idMesa
                WHERE       p.dniPastor = '$dni'";

$resultado = mysqli_query($conexion, $Seleccionar);
$datos = [];
if($resultado){
    if($fila = mysqli_fetch_assoc($resultado)) {
        $datos = [
            'dni'           => $dni,
            'nombre'        => $nombre,
            'categoria'     => $fila['categoria'],
            'extra'         => $fila['extra'],
            'telefono'      => $fila['telefono'],
            'iglesia'       => $fila['nombreIglesia'],
            'ciudad'        => $fila['ciudad'],
            'pais'          => $fila['pais'],
            'mesa'          => $fila['nombreMesa'],
            'anfitrion'     => $fila['nombrePersona'],
            'celular'     => $fila['celular'],
            'esposa'        => $fila['nombreEsposa']
        ];
    }
}
mysqli_close($conexion);
echo json_encode($datos, JSON_UNESCAPED_UNICODE);
?>