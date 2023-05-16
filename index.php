<?php

    function API($ruta){
        $url= "http://190.128.138.170:6677/titulos/consultas.php";
        $rs = $url . $ruta;
        return $rs;
    }

    $direccion = API("?tag=consultaTituloSinUrl");
    $json = file_get_contents($direccion);

    $datos = json_decode($json,true);
    var_dump($json);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>