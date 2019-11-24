<?php

	include "conexao.php";

	$id = $_GET['id'];
	$query = "delete from instituicao where id='".$id."'";	
/*  echo $query; */
	$sql = mysqli_query($link, $query);
	mysqli_close ($link);
 	header('Location: ../instituicao.php');

?>