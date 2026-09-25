<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <?php

        $dni        = $_POST['DNI_POST'];
        $nombre     = $_POST['NOMBRE_POST'];
        $categoria  = $_POST['CATEGORIA_POST'];
        $extra      = $_POST['EXTRA_POST'];
        $telefono   = $_POST['TEL_POST'];
        $mesa       = $_POST['MESA_POST'];
    ?>

    <center>
        <label><?=$dni?></label><br>
        <label><?=$nombre?></label><br>
        <label><?=$categoria?></label><br>
        <label><?=$extra?></label><br>
        <label><?=$telefono?></label><br>
        <label><?=$mesa?></label><br>    
    </center>
    
</body>
</html>