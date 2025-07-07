<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisores</title>
</head>

<body>
    <h1>Divisores</h1>


    <form method="POST" action="">
        <label for="divisores">Digite um número para descobrir seus divisores: </label>
        <input type="number" id="divisores" name="divisores" required>
        <button type="submit" name="verificar_divisores">Verificar</button>
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['verificar_divisores'])) {
        $numero = $_POST['divisores'];
    };
    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            echo "<br>";
            echo $i . "";
        };
    };
};
?>