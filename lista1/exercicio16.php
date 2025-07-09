<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pode Votar ou Não</title>
</head>
<body>
    <h1>Descobrir se pode votar ou não</h1>

    <form method="POST" action="">
        <label for="nome">Digite seu nome: </label>
        <input type="text" id="nome" name="nome" required>
        <br><br>
        <label for="idade">Digite sua idade: </label>
        <input type="number" id="idade" name="idade" required>
        <br><br>
        <button type="submit" name="verificar_numero">Verificar</button>
    </form>

</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['verificar_numero'])) {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
    };
    if ($idade >= 16) {
        echo "$nome,", " você pode votar";
    } else if ($idade < 0) {
        echo "Idade inválida";
    } else if ($idade <= 16){
        echo "$nome," ," você não pode votar";
    } 
};
?>