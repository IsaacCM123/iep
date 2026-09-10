<?php
$host = getenv('DB_HOST');
$port = getenv('DB_PORT');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$db   = getenv('DB_NAME');
$ssl  = __DIR__ . '/../../BD/cert/globalsignrootca.pem';

$conexion = mysqli_init();

mysqli_ssl_set($conexion,NULL,NULL,$ssl,NULL,NULL);

$exito = mysqli_real_connect($conexion,$host,$user,$pass,$db,(int)$port,NULL,MYSQLI_CLIENT_SSL);
if ($exito) { die('Conexion Exitosa'); } else{ die('Error en conexion'); }
// El archivo que haga "require" será responsable de cerrarla con mysqli_close($conexion) al terminar.
?>