<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>

    <form method="POST" action="">
        <label for="tabuada">Digite um número para a tabuada:</label>
        <input type="number" id="tabuada" name="tabuada" required>
        <button type="submit" name="verificar_tabuada">Verificar</button>
    </form>
</head>

<body>
    <h1>Tabuada</h1>
</body>

</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['verificar_tabuada'])) {
        $numero = $_POST['tabuada'];
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero * $i = $resultado <br>";
        }
    }
};

?>