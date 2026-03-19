<?php
$temp = "";
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temp = floatval($_POST["temperatura"] ?? 0);

    if ($temp < 20) {
        $mensagem = "Temperatura fria";
    } elseif ($temp <= 30) {
        $mensagem = "Temperatura agradavel";
    } else {
        $mensagem = "Temperatura quente";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>UC05 - Classificação de Temperatura</title>
</head>

<body>
    <h2>UC05 - Classificação de Temperatura</h2>

    <form method="post">
        Temperatura: <input type="number" name="temperatura" id="temperatura"><br><br>
        <button type="submit" id="btnTemperatura">Classificar</button>
    </form>

    <p id="resultado"><?php echo $mensagem; ?></p>
</body>

</html>