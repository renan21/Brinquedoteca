<?php

include('conexao.php');

$nome = $_POST['nomeInst'];
$cnpj = $_POST['cnpj'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];


$query = "insert into instituicao (nome, cnpj, endereco, telefone) value ('{$nome}', '{$cnpj}', '{$endereco}', '{$telefone}')";

	/*	echo $query; */


$sql = mysqli_query($link, $query);

mysqli_close ($link);

header('Location: ../index.php'); 

?>