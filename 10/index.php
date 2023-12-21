<?php
$array = isset($_POST['array']) ? unserialize($_POST['array']) : [];
if (isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    if (array_key_exists($nombre, $array)) {
        $array[$nombre]++;
    } else {
        $array[$nombre] = 1;
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
<form action="index.php" method="post">
    <fieldset>
        <legend>Datos de click</legend>
        Nombre <input type="text" name="nombre" id=""><br />
        <input type="submit" value="Haz click" name="submit">
        <input type="hidden" value=<?=serialize($array)?> name="array">
    </fieldset>
</form>
<?php
foreach ($array as $index => $clicks) {
    echo "<h1>$index ha hecho $clicks click/s</h1>";
}
?>
</body>
</html>

