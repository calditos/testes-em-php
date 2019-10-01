<?php

include_once("conecta.php");

$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "insert into client_starveiculo (nome,email) values ('$nome','$email')";
$salvar = mysql_query($conexao,$sql);
mysqli_close($conexao);

?>