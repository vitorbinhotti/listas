<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Perfeito</title>
</head>

<body>
    <h1>Número Perfeito</h1>

    <form method="POST" action="">
        <label for="divisores">Digite um número para ver se o número é perfeito: </label>
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
    function numeroPerfeito($numero)
    {
        if ($numero <= 1) {
            return false;
        };

        $divisores = 1;
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                $divisores += $i;
                if ($i != $numero / $i) {
                    $divisores += $numero / $i;
                };
            };
        };
        return $divisores == $numero;
    };

    if (numeroPerfeito($numero)) {
        echo "$numero é um número perfeito.";
    } else {
        echo "$numero não é um número perfeito.";
    }
};
?>