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