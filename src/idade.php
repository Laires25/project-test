<?php
$idade = "";
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idade = intval($_POST["idade"] ?? 0);

    if ($idade < 18) {
        $mensagem = "Não pode votar";
    } else {
        $mensagem = "Pode votar";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>UC04 - Validação de Idade</title>
</head>

<body>
    <h2>UC04 - Validação de Idade para Votar</h2>

    <form method="post">
        Idade: <input type="number" name="idade" id="idade"><br><br>
        <button type="submit" id="btnIdade">Validar</button>
    </form>

    <p id="resultado"><?php echo $mensagem; ?></p>
</body>

</html>