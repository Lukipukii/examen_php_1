<?php
/**
 * Generamos un número del 1 al 15.
 * En función del número generado mostraremos un mensaje
 * con el  nombre del mes (1-Enero, 2- Febrero …)
 * y el número de días.
 * En el caso de febrero en número de días que mostraremos será 28 o 29 días
 *
 * Usa una estructura switch-case
 */

$mes = rand(1,15);
$nombre = null;
$texto = "";
switch ($mes) {
    case 1:
        $nombre = $nombre ?? "Enero";
    case 3:
        $nombre = $nombre ?? "Marzo";
    case 5:
        $nombre = $nombre ?? "Mayo";
    case 7:
        $nombre = $nombre ?? "Julio";
    case 8:
        $nombre = $nombre ?? "Agosto";
    case 10:
        $nombre = $nombre ?? "Octubre";
    case 12:
        $nombre = $nombre ?? "Diciembre";
        $texto = "El mes generado es $nombre y tiene 31 días";
        break;
    case 4:
        $nombre = $nombre ?? "Abril";
    case 6:
        $nombre = $nombre ?? "Junio";
    case 9:
        $nombre = $nombre ?? "Septiembre";
    case 11:
        $nombre = $nombre ?? "Noviembre";
        $texto = "El mes generado es $nombre y tiene 30 días";
        break;
    case 2:
        $nombre = $nombre ?? "Febrero";
        $texto = "El mes generado es $nombre y tiene 28 o 29 días";
        break;
    default:
        $texto = "EL mes generado es el $mes. No existe";
        break;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../estilo.css">
</head>
<body>

<a style="%;color:darkblue;size:2rem" href="./../index.php">Volver</a>
<fieldset>
    <h1><?=$texto?></h1>
</fieldset>

</body>
</html>

