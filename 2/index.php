<?php
// Genera un valor entre 1 y 100, y muestra si es par o si es impar

//Aquí genero el valor
$numRand = rand(1,100);
$texto = $numRand % 2 == 0 ? "El número $numRand es par" : "El número $numRand es impar";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ejercicio 2</title>
    <link rel="stylesheet" href="./../estilo.css">

</head>
<body>
<a style="%;color:darkblue;size:2rem" href="./../index.php">Volver</a>

<h1>
<!--    Aquí lo visualizo  -->
    <?=$texto?>
</h1>

</body>
</html>

