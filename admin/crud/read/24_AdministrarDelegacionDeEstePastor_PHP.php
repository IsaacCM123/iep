<?php
require __DIR__ . '/../../core/1_conexion.php';

$dni = $_POST['claveDniPastorParaScriptPHP'];

$Seleccionar = "SELECT      p.nombreCompleto,
                            p.categoria,
                            p.extra,
                            p.telefono,
                            i.nombreIglesia,
                            i.ciudad,
                            i.pais,
                            m.nombreMesa,
                            per.nombrePersona,
                            a.celular
                            
                FROM        tbl_pastor p
                LEFT JOIN   tbl_ministerio mi ON mi.FK_dniPastor    = p.dniPastor
                LEFT JOIN   tbl_iglesia i     ON i.idIglesia        = mi.PKFK_idIglesia
                LEFT JOIN   tbl_hospedaje h   ON h.FK_dniPastor     = p.dniPastor
                LEFT JOIN   tbl_anfitrion a   ON a.PKFK_idPersona   = h.FK_idAnfitrion
                LEFT JOIN   tbl_persona per   ON per.idPersona      = a.PKFK_idPersona
                LEFT JOIN   tbl_mesa m        ON m.idMesa           = p.FK_idMesa
                WHERE       p.dniPastor = '$dni'";

$SeleEsposa =   "SELECT     e.idEsposa,
                            e.nombreEsposa,
                            m.nombreMesa
                FROM        tbl_esposa e
                LEFT JOIN   tbl_mesa m ON m.idMesa = e.FK_idMesa
                WHERE       e.FK_dniPastor = '$dni'";

$SeleDelegados = "SELECT    d.idDelegado,
                            d.nombreDelegado,
                            d.cedulaIdentidad,
                            m.nombreMesa
                FROM        tbl_delegado d
                LEFT JOIN   tbl_mesa m ON m.idMesa = d.FK_idMesa
                WHERE       d.FK_dniPastor = '$dni'";

$SeleHijos =    "SELECT     h.idHijo,
                            h.nombreHijo,
                            m.nombreMesa
                FROM        tbl_hijo h
                LEFT JOIN   tbl_mesa m ON m.idMesa = h.FK_idMesa
                WHERE       h.FK_dniPastor = '$dni'";

$resultado = mysqli_query($conexion,$Seleccionar);

$ResulEspo = mysqli_query($conexion,$SeleEsposa);

$ResulDele = mysqli_query($conexion,$SeleDelegados);

$ResulHijo = mysqli_query($conexion,$SeleHijos);

$datos = [];
if($resultado){
    if($fila = mysqli_fetch_assoc($resultado)) {
        $datos = [
            'dni'           => $dni,
            'nombre'        => $fila['nombreCompleto'],
            'categoria'     => $fila['categoria'],
            'extra'         => $fila['extra'],
            'telefono'      => $fila['telefono'],
            'iglesia'       => $fila['nombreIglesia'],
            'ciudad'        => $fila['ciudad'],
            'pais'          => $fila['pais'],
            'mesa'          => $fila['nombreMesa'],
            'anfitrion'     => $fila['nombrePersona'],
            'celular'       => $fila['celular']
        ];
    }
}

$esposa = [];
if ($ResulEspo){
    if($fila = mysqli_fetch_assoc($ResulEspo)){
        $esposa[] = [
            'id_esp'   => $fila['idEsposa'],
            'nom_esp'   => $fila['nombreEsposa'],
            'esp_mesa'  => $fila['nombreMesa']
        ];
    }
}

$delegados = [];
if ($ResulDele){
    while ($fila = mysqli_fetch_assoc($ResulDele)) {
        $delegados[] = [
            'idDele'    => $fila['idDelegado'],
            'nombre'    => $fila['nombreDelegado'],
            'cedula'    => $fila['cedulaIdentidad'],
            'mesa'      => $fila['nombreMesa']
        ];
    }
}

$hijos = [];
if ($ResulHijo){
    while ($fila = mysqli_fetch_assoc($ResulHijo)) {
        $hijos[] = [
            'id_Hijo'   => $fila['idHijo'],
            'nombre'    => $fila['nombreHijo'],
            'mesa'      => $fila['nombreMesa']
        ];
    }
}

$datos['esposaArray']    = $esposa;
$datos['delegadosArray'] = $delegados;
$datos['hijosArray']     = $hijos;

mysqli_close($conexion);
echo json_encode($datos, JSON_UNESCAPED_UNICODE);
?>