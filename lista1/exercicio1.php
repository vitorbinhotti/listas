<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Ímpar</title>
</head>

<body>
    <h1>Par ou Ímpar</h1>


    <form method="POST" action="">
        <label for="numero_par">Verifica se é um número par:</label>
        <input type="number" id="numero_par" name="numero_par" required>
        <button type="submit" name="verificar_par">Verificar</button>
    </form>
</body>

</html>



<?php
function verificarPar($numero){
    if ($numero % 2 == 0) {
        return "Numero $numero é par";
    } else {
        return "Número $numero é ímpar";
    }
};


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['verificar_par'])) {
        $numero = $_POST['numero_par'];
        $ehPar = true;
        echo verificarPar($numero);
    };
};



?>