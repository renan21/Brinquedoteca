<?php

include('conexao.php');

$nome = $_POST['nome'];
$instituicao = $_POST['instituicao'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];


$query = "insert into responsavel (nome, idinstituicao, endereco, telefone) value ('{$nome}', '{$instituicao}', '{$endereco}', '{$telefone}')";

	/*	echo $query; */


$sql = mysqli_query($link, $query);

mysqli_close ($link);

header('Location: ../index.php'); 

?>