<?php

include('conexao.php');

$material = $_POST['material'];
$quantidade = $_POST['quantidade'];


$query = "insert into material (material, quantidade) value ('{$material}', '{$quantidade}')";

	/*	echo $query; */


$sql = mysqli_query($link, $query);

mysqli_close ($link);

header('Location: ../materiais.php'); 

?>