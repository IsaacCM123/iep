<?php
require __DIR__ . '/../core/1_conexion.php';

$dni = $_POST['dniPOST'];

$Seleccionar = "SELECT categoria,extra,telefono,FK_idMesa from tbl_pastor where dniPastor = '$dni'";

$resultado = mysqli_query($conexion, $Seleccionar);
$HTML = '';
if($resultado){
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $HTML       .= "<tr>";
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


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <h1>Este es el formulario 4_SeleccionarDelegacion.php</h1>


    <table id="tabla">
        <thead>
            Datos.
        </thead>
        <tbody id="cuerpo"><!--Aqui se insertara la lista de pastores con .JSON--></tbody>
    </table>

    <script>
        fetch('4_SeleccionarDelegacion.php')
            .then(response => response.json())
            .then(data => {
                document.getElementById('cuerpo').innerHTML = data;
            })
            .catch(error => {
                document.getElementById('cuerpo').innerHTML = 
                    '<tr><td colspan="4">Error al cargar los datos</td></tr>';
            });
    </script>
</body>
</html>