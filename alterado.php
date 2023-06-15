<link rel="icon" type="image/png" href="https://www.shareicon.net/data/128x128/2015/10/03/111567_development_512x512.png"/>
<?php
include("conexao.php");
$login = isset($_POST['login']) ? $_POST['login'] : ''; 
$senhaantiga = isset($_POST['senha_atual']) ? $_POST['senha_atual'] : ''; 
$senhanova = isset($_POST['nova_senha']) ? $_POST['nova_senha'] : ''; 

$update= "UPDATE login SET senha = '$senhanova' WHERE login = '$login'";
$query= mysqli_query($conexao, $update);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type= "text/css" href="estilo.css">
    <title>Projeto A3 MANHÃ</title>
</head>
<body>
  <h2>Senha alterada com sucesso!</h2>
    <a href="login.php">Voltar</a>
</body>
</html>
