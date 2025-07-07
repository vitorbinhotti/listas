<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter Celsius -> Fahrenheit</title>
</head>

<body>
    <h1>Converter Celsius -> Fahrenheit</h1>

    <form method="POST" action="">
        <label for="temperatura">Digite uma temperatura para conveter de Celsius -> Fahrenheit</label>
        <input type="number" id="temperatura" name="temperatura" required>
        <button type="submit" name="verificar_temperatura">Verificar</button>
    </form>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['verificar_temperatura'])) {
        $grau = $_POST['temperatura'];

        echo "Conversão:", (($grau * 9 / 5) + 32);
    };
};
?>