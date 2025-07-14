<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ano bissexto</title>
</head>

<body>
    <h1>Ano bissexto</h1>

    <form method="POST" action="">
        <label for="ano">Verificar se ano é bissexto </label>
        <input type="text" id="ano" name="ano" required>
        <button type="submit" name="verificar_ano">Verificar</button>
    </form>
</body>

</html>



<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['verificar_ano'])) {
        $ano = $_POST['ano'];

        if (($ano % 4 == 0) || ($ano % 400 == 0)) {
            echo "<p>$ano é um ano bissexto.</p>";
        } else {
            echo "<p>$ano não é um ano bissexto.</p>";
        }
    }
}
?>