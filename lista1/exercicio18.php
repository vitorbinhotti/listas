<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descobrir qual número é maior</title>
</head>
<body>
    <h1>Digite 3 números para descobrir o maior dos mesmos</h1>

    <form method="POST" action="">
        <label for="numero1">Digite o primeiro número: </label>
        <input type="number" id="numero1" name="numero1" required>
        <br><br>
        <label for="numero2">Digite o segundo número:</label>
        <input type="number" id="numero2" name="numero2" required>
        <br><br>
         <label for="numero3">Digite o terceiro número: </label>
        <input type="number" id="numero3" name="numero3" required>
        <br><br>
        <button type="submit" name="verificar_numeros">Verificar</button>
    </form>

</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['verificar_numeros'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];
    };
    if ($numero1 > $numero2 and $numero3) {
        echo 'Primeiro número maior';
    } else if ($numero2 > $numero3 and $numero1) {
        echo "Segundo número maior";
    } else if ($numero3 > $numero2 and $numero1) {
        echo "Terceiro número maior";
    } 
};
?>