<link rel="icon" type="image/png" href="https://www.shareicon.net/data/128x128/2015/10/03/111567_development_512x512.png"/>
<?php
include ("conexao.php");
$login= $login = isset ($_POST ['login']) ? $_POST['login'] : '';
$senha= isset ($_POST ['senha']) ? $_POST ['senha'] : '';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type= "text/css" href="estilo.css">
    <title></title>
</head>
<body>
    <section id="Lista">
        <center>
            <h1>
                <?php
                $select="SELECT nome, login FROM login";
                $resultado= mysqli_query ($conexao, $select);
                if (mysqli_num_rows($resultado) > 0) {
                    while ($row = mysqli_fetch_assoc($resultado)) {
                        echo "ID: " . $row["login"] . " - Nome: " . $row["nome"] . "<br>";
                    }
                } else {
                    echo "Nenhum resultado encontrado.";
                }
                ?>
                <br><br>
                <a href="index.php">Voltar</a>
            </h1>
        </center>
    </section>
</body>
</html>