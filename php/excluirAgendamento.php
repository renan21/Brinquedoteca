<?php

	include "conexao.php";

	$id = $_GET['id'];
	$query = "delete from agendamentos where id='".$id."'";	
/*  echo $query; */
	$sql = mysqli_query($link, $query);
	mysqli_close ($link);
 	header('Location: ../index.php');

?>