<link rel="icon" type="image/png" href="https://www.shareicon.net/data/128x128/2015/10/03/111567_development_512x512.png"/>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="sttylesheet" text="text/css" href="estilo.css">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Cadastro</h1>
    <form id="cadastro" action="cadastrar.php" method="POST">
        Nome: <input type="text" name="nome" required><br>
      Login: <input type="text" name="login" required><br>
      Senha: <input type="password" name="senha" required><br>
      <input type="submit" name="cadastrar" value="Cadastrar"><br>
      <progress value="75" max="100"></progress>
    </form>
</body>
</html>
