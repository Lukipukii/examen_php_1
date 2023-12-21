<?php
$numRand = rand(1,256);
$numBin = decbin($numRand);
$numOct = decoct($numRand);
$numHex = dechex($numRand);

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
<style>
    span {
        color: red;
    }
</style>
<body>

<a style="%;color:darkblue;size:2rem" href="./../index.php">Volver</a>
<h1>
<!--    Aquí puedes visualizarlo -->
    El número generado es <span><?=$numRand?></span>
</h1>
<h2>En binario se escribe <span><?=$numBin?></h2></body>
<h2>En octal se escribe <span><?=$numOct?></h2></html>
<h2>En hexadecimal se escribe <span><?=$numHex?></h2></
</body>
</html>

