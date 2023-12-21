<?php
$opcion = $_POST['submit'] ?? null;
$texto = match ($opcion) {
    "Ver" => "Has pulsado el botón de ver",
    "Insertar" => "Has pulsado el botón de insertar",
    "Borrar" => "Has pulsado el botón de borrar",
    "Consultar" => "Has pulsado el botón de consultar",
    "Editar" => "Has pulsado el botón de editar",
    default => "Selecciona una opción",
};

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
<form action="index.php" method="post">
    <fieldset>
        <legend>Opciones</legend>
        <input type="submit" value="Ver" name="submit">
        <input type="submit" value="Insertar" name="submit">
        <input type="submit" value="Borrar" name="submit">
        <input type="submit" value="Consultar" name="submit">
        <input type="submit" value="Editar" name="submit">
    </fieldset>
</form>
<h2><?=$texto?></h2>
</body>
</html>

