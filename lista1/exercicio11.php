<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palíndromo</title>
</head>

<body>
    <h1>Palíndromo</h1>

    <form method="POST" action="">
        <label for="palindromo">Digite um palavra para ver se é palíndromo: </label>
        <input type="text" id="palindromo" name="palindromo" required>
        <button type="submit" name="verificar_palindromo">Verificar</button>
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['verificar_palindromo'])) {
        $palindromo = $_POST['palindromo'];
        $palavraInvertida = strrev($palindromo);
    };
   if ($palindromo == $palavraInvertida) {
    echo "Essa palavra é um palíndromo";
   } else {
    echo "Essa palavra não é um palíndromo";
   }
};
?>