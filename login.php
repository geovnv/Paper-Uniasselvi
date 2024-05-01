<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/icone.ico" type="image/x-icon">
    <title>Gelateria Aurora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login">
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
        <input class="log" type="text" name="email" placeholder="Email">
        <br><br>
        <input class="log" type="password" name="senha" placeholder="Senha">
        <br><br>
        <input class="enviar" type="submit" name="submit" value="Enviar">
        <p id="link"><a href="tela-de-cadastro.php" id="link">Faça seu cadastro aqui</a></p>
        <p id="link"><a href="home.php" id="link">Voltar para a página inicial</a></p>
        </form>
    </div>
</body>
</html>