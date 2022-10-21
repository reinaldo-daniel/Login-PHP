<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="titulo">
            <h2>Sistema de Login</h2>
        </div>
        <div class="erro">
            <p>Erro: E-mail ou Senha incorretos.</p>
        </div>
        <div class="dados">
            <form action="login.php" method="POST">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" require>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" require>
                <input type="submit" value="ENTRAR">
            </form>
        </div>
        <a href="front_registro.php">registrar</a>
    </main>
</body>
</html>