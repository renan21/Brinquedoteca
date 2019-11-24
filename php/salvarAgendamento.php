<?php
	include('conexao.php');

	$sala = $_GET['salaSelect'];
	$data = $_GET['dataSelect'];
	$hora = $_GET['horaSelect'];
	$responsavel = $_GET['respSelect'];
	$instituicao = $_GET['instSelect'];
	
/*	$mes = $_GET['mesSelect'];
	$dia = $_GET['diaSelect'];*/
	
	
	$query = "insert into agendamentos (sala, data, hora, instituicao, responsavel) value ('{$sala}', '{$data}', '{$hora}', '{$responsavel}', '{$instituicao}')";
	
/*	echo $query; */
	
	$sql = mysqli_query($link, $query);
	
	mysqli_close ($link);
	
	header('Location: ../index.php');
	

?>