<link rel="icon" type="image/png" href="https://www.shareicon.net/data/128x128/2015/10/03/111567_development_512x512.png"/>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" text="text/css" href="estilo.css">   
    <title>Projeto A3 - Programação e Modelagem Manhã</title>
</head>
<body>
    <h3>
        Olá,
        <?php
        if(isset($_SESSION['nome'])==null){
            ?>
            Visitante <br>
            <a href="login.php"><input type="submit" name="login" value="Login"><br><br>
            <?php
        }else {
            echo $_SESSION['nome'];?><br><br>
            <a href="cadastro.php"><input type="submit" name="cadastrar" value="Cadastrar"><br><br>
            <a href="listar_usuario.php"><input type="submit" name="listar" value="Listar Usúario"><br><br>
            <a href="alterar_senha.php"><input type="submit" name="alterar" value="Alterar senha"><br><br>
            <a href="logout.php"><input type="submit" name="sair" value="Sair"><br><br>
            <?php } ?>
    </h3>        
</body>
</html>
