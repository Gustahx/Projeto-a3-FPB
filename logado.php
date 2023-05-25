<link rel="icon" type="image/png" href="https://www.shareicon.net/data/128x128/2015/10/03/111567_development_512x512.png"/>
<?php
include('conexao.php');
$login= isset($_POST['login'])?$_POST['login']:'';
$senha= isset($_POST['senha'])?$_POST['senha']:'';
if($login=="aluno" && $senha=="fpb") {
    Echo "Dados Corretos";
}else{
    echo "Dados Errados";
}
?>
