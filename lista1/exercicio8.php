<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador número pares</title>
</head>
<body>
    <h1>Contador número pares</h1>

    <form method="POST" action="">
        <label for="numero">Digite um número para descobrir os números pares entre o número 1 e o número inserido: </label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_numero">Verificar</button>
    </form>

</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['verificar_numero'])) {
        $numero = $_POST['numero'];
    };
    if (($numero) && ($numero > 0)) {
        for ($i = 2; $i <= $numero; $i += 2) {
            echo $i . " ";
        };
    };
};
?>