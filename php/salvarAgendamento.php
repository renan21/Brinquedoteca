<?php
	include('conexao.php');

	$sala = $_GET['salaSelect'];
	$mes = $_GET['mesSelect'];
	$dia = $_GET['diaSelect'];
	$hora = $_GET['horaSelect'];
	
	$query = "insert into agendamentos (sala, dia, hora, mes) value ('{$sala}', '{$dia}', '{$hora}', '{$mes}')";
	
/*	echo $query; */
	
	$sql = mysqli_query($link, $query);
	
	mysqli_close ($link);
	
	header('Location: ../index.php');
	

?>