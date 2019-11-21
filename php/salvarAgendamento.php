<?php
	include('conexao.php');

	$sala = $_GET['salaSelect'];
	$data = $_GET['dataSelect'];
	$hora = $_GET['horaSelect'];
	
/*	$mes = $_GET['mesSelect'];
	$dia = $_GET['diaSelect'];*/
	
	
	$query = "insert into agendamentos (sala, data, hora) value ('{$sala}', '{$data}', '{$hora}')";
	
/*	echo $query; */
	
	$sql = mysqli_query($link, $query);
	
	mysqli_close ($link);
	
	header('Location: ../index.php');
	

?>