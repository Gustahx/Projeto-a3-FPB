<link rel="icon" type="image/png" href="https://www.shareicon.net/data/128x128/2015/10/03/111567_development_512x512.png"/>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel= "stylesheet" href= "estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <center>
        <h1>Olá, <?php echo $_SESSION['nome'] ?> </h1>
        <a href="cadastro.php">Cadastrar</a><br>
        <a href="logout.php">Sair</a>
    </center>  
</body>
</html>
