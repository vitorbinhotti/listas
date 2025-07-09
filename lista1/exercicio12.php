<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Vogais</title>
</head>

<body>
    <h1>Contador de Vogais</h1>

    <form method="POST" action="">
        <label for="caractere">Digite uma palavra para contar as vogais: </label>
        <input type="text" id="caractere" name="caractere" required>
        <button type="submit" name="verificar_string">Verificar</button>
    </form>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['verificar_string'])) {
        $caractere = $_POST['caractere'];

        $vogais = ['a','e','i', 'o' , 'u' , 'A' , 'E', 'I', 'O', 'U'];
        $quantidade_vogais = 0;

        for ($i = 0; $i < strlen($caractere); $i++) {
            if (in_array($caractere[$i], $vogais)) {
                $quantidade_vogais++;
            };
        };
        echo "A quantidade de vogais na palavra é $quantidade_vogais";
    };
};
?>