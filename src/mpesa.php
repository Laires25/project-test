<?php
$valor = "";
$codigo = "";
$saldo = 1000;
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = floatval($_POST["valor"] ?? 0);
    $codigo = $_POST["codigo"] ?? "";

    if ($valor < 10) {
        $mensagem = "Abaixo do mínimo";
    } elseif ($valor > 5000) {
        $mensagem = "Acima do máximo";
    } elseif ($codigo != "1234") {
        $mensagem = "Codigo inválido";
    } elseif ($valor > $saldo) {
        $mensagem = "Saldo insuficiente";
    } elseif ($valor > 0) {
        $mensagem = "Levantamento aprovado";
    } else {
        $mensagem = "Valor válido";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>UC02 - Levantamento M-Pesa</title>
</head>

<body>
    <h2>UC02 - Levantamento M-Pesa</h2>

    <form method="post">
        Valor: <input type="number" name="valor" id="valor"><br><br>
        Codigo: <input type="text" name="codigo" id="codigo"><br><br>
        <button type="submit" id="btnMpesa">Levantar</button>
    </form>

    <p id="resultado"><?php echo $mensagem; ?></p>
</body>

</html>