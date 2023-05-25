<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel= "stylesheet" href= "estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <center>
        <form id="cadastro" action="cadastrar.php" method="POST">
            Nome Completo: <input type="text" name="nome" required><br>
            Login: <input type="text" name="login" required><br>
            Senha: <input type="password" name="senha" required><br><br>
            <input type="submit" name="cadastrar" value="Cadastrar">
        </form>
        <a href="index.php">Voltar</a>
    </center>
</body>
</html>
