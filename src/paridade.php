<?php
$numero = "";
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST["numero"] ?? 0);

    if ($numero % 2 == 0) {
        $mensagem = "PAR";
    } else {
        $mensagem = "IMPAR";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>UC03 - Função de Paridade</title>
</head>

<body>
    <h2>UC03 - Função de Paridade</h2>

    <form method="post">
        Número: <input type="number" name="numero" id="numero"><br><br>
        <button type="submit" id="btnParidade">Testar</button>
    </form>

    <p id="resultado"><?php echo $mensagem; ?></p>
</body>

</html>