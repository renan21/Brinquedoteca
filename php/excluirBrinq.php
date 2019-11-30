<?php

	include "conexao.php";
	
	$id = $_GET['id'];
	$query = "delete from material where id='".$id."'";
	/*  echo $query; */
	$sql = mysqli_query($link, $query);
	mysqli_close ($link);
	header('Location: ../materiais.php');

?>