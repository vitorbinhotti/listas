<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>

<body>
    <h1>IMC</h1>

    <form method="POST" action="">
        <p>De seus valores para calcular o IMC:</p>
        <label for="peso">Seu peso (kg):</label>
        <input type="number" id="peso" name="peso" required> <br><br>
        <label for="altura">Sua altura (metros): </label>
        <input type="text" id="altura" name="altura" required> <br><br>
        <button type="submit" name="verificar_temperatura">Verificar</button>
    </form>
</body>

</html>

<?php
function calcularIMC($peso, $altura) {
    if ($altura > 0) {
        $imc = $peso / ($altura * $altura);
        return number_format($imc, 2);
    } else {
        return 'Altura inválida';
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $peso =  $_POST["peso"];
        $altura = $_POST["altura"];

    };
    echo "Seu IMC é " , calcularIMC($peso, $altura);
    };

?>