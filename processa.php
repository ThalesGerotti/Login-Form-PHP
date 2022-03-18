<?php

include_once("conexao.php");

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

$sql = "insert into usuario (cpf,senha) values ('$cpf,'$senha')";
$salvar = mysqli_query($conexao,$sql);

mysqli_close($conexao);

?>