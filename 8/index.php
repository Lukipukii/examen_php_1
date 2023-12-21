<?php
// Dado el array de la tienda que se facilita en el ejercicio,
// muestra el nombre de todos los productos de los que haya más de 2000 unidades y cuesten más de 2,10 euros
//de cada uno muestra el nombre del producto, sus unidades y su precio
$productos = [
    'lechuga' =>
                ['unidades' => 200,
                 'precio' => 0.90],
    'tomates' =>
                ['unidades' => 2000,
                 'precio' => 2.15],
    'cebollas' =>
                ['unidades' => 3200,
                 'precio' => 0.49],
    'fresas' =>
               ['unidades' => 4800,
                'precio' => 4.50],
    'manzanas' =>
               ['unidades' => 2500,
                'precio' => 2.10],
];
// Genera un valor entre 1 y 100, y muestra si es par o si es impar

//Aquí genero el valor
$texto = "";
foreach ($productos as $item => $datos) {
        if ($datos['unidades'] > 2000 && $datos['precio'] > 2.10) {
            $texto .= "<h1>Hay {$datos['unidades']} unidades de $item y cuesta {$datos['precio']}</h1>";
        }
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
<?=$texto?>
</body>
</html>

