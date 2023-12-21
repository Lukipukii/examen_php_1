<?php
function sumar(string $num1, string $num2) : int | string {
    return is_numeric($num1) && is_numeric($num2) ? $num1 + $num2 : "No dejes espacios en blanco y pon solo valores númericos";
}
function restar(string $num1, string $num2) : int | string {
    return is_numeric($num1) && is_numeric($num2) ? $num1 - $num2 : "";
}
function dividir(string $num1, string $num2) : float | string {
    if ($num2 == 0) {
        return "No se puede dividir por 0";
    }
    return is_numeric($num1) && is_numeric($num2) ? $num1 / $num2 : "No dejes espacios en blanco y pon solo valores númericos";
}
function multiplicar(string $num1, string $num2) : int | string {
    return is_numeric($num1) && is_numeric($num2) ? $num1 * $num2 : "No dejes espacios en blanco y pon solo valores númericos";
}
$num1 = $_POST['op1'];
$num2 = $_POST['op2'];
$resultado = null;
if (isset($_POST['submit'])) {

    $resultado = match ($_POST['operador']) {
        "+" => sumar($num1, $num2),
        "-" => restar($num1, $num2),
        "*" => multiplicar($num1, $num2),
        "/" => dividir($num1, $num2),
        default => "default"
    };
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="./../estilo.css">
</head>
<body>

<a style="%;color:darkblue;size:2rem" href="./../index.php">Volver</a>

<form action="index.php" method="post">
    <fieldset>
        <legend>Calculadora</legend>
        <input type="text" name="op1" placeholder="Operando 1">
        <select name="operador">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="op2" placeholder="Operando 2">
        <input type="submit" value="Operar" name="submit">
    </fieldset>
</form>
<h1>
<!--    Aquí el resultado -->
    <?=$resultado?>
</h1>

</body>
</html>

