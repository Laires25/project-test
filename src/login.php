<?php
$email = "";
$senha = "";
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"] ?? "";
    $senha = $_POST["senha"] ?? "";

    if (empty($email) || empty($senha)) {
        $mensagem = "Campos vazios";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensagem = "Email inválido";
    } elseif (strlen($senha) < 8) {
        $mensagem = "Mínimo 8 caracteres";
    } elseif (!preg_match('/\d/', $senha)) {
        $mensagem = "Pelo menos 1 número";
    } elseif ($senha !== "senha123") {
        $mensagem = "Senha incorrecta";
    } else {
        $mensagem = "Login válido";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>UC01 - Fazer Login</title>
</head>

<body>

    <h2>UC01 - Fazer Login</h2>

    <form method="post">
        Email: <input type="text" name="email" id="email"><br><br>
        Senha: <input type="password" name="senha" id="senha"><br><br>
        <button type="submit" id="btnLogin">Entrar</button>
    </form>

    <p id="resultado"><?php echo $mensagem; ?></p>

</body>

</html>