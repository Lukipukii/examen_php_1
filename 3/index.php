<?php
/*
// Haz un programa que
      cree 10 notas aleatorias,
      las guardes en una array
      las visualice de una en una con el siguiente formato:
(Los valores, o sea el 8,9,9, son ejemplos, tienen que ser los valores aleatorios que crees)
//Nota 0: 8
//Nota 1: 9
//Nota 2: 9
*/
$notas = [];
for ($i = 0; $i < 10; $i++) {
    $notas[$i] = rand(0,10);
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejrecicio 3</title>
    <link rel="stylesheet" href="./../estilo.css">

</head>
<body>
<a style="%;color:darkblue;size:2rem" href="./../index.php">Volver</a>

<!--    Si no te lía mucho, deberías de visualizarlo aquí  -->
    <?php
    foreach ($notas as $index => $nota) {
        echo "<h1>Nota $index: $nota</h1>";
        }
    ?>

</body>
</html>

