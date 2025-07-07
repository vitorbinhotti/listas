<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positivo, negativo ou zero</title>
</head>
<body>
    <h1>Número Positivo, negativo ou zero</h1>

     <form method="POST" action="">
        <label for="numero">Digite um número para saber se é positivo, negativo ou zero:</label>
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
    if($numero > 0) {
        echo 'Número positivo';
    } else if ($numero < 0) {
        echo 'Número negativo';
    } else {
        echo 'Número igual a zero';
    }
};

?>