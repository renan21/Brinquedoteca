<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$base = "brinquedoteca";
	$link = mysqli_connect ( $host, $user, $pass, $base );	/* faz a conexão com o banco */
	
	$link->set_charset('utf8'); /* Define codificação do PHP, se não caracteres especiais ficam bugados */
	
	function getSala($link){
	
		$salas = array();
		$query = "select sala from sala";
		$result = mysqli_query($link, $query);
	
		while($fetch = mysqli_fetch_assoc($result)){
			array_push($salas, $fetch);
		}
		return $salas;
	}
	
	function getMeses($link){
	
		$meses = array();
		$query = "select id, mes from meses";
		$result = mysqli_query($link, $query);
	
		while($fetch = mysqli_fetch_assoc($result)){
			array_push($meses, $fetch);
		}
		return $meses;
	}	
	
	function getDias($link, $mes){
		
		$query ="";
		$dias = array();
		
		if($mes == 'FEVEREIRO' ){
			$query = "select dia from dias where dia not in (31, 30) order by dia";
		} else if ($mes == 'JANEIRO' || $mes == 'MARÇO'  || $mes == 'MAIO'  || $mes == 'JULHO' || $mes == 'AGOSTO'
				   || $mes == 'OUTUBRO' || $mes == 'DEZEMBRO'){	
			$query = "select dia from dias order by dia";
		} else{
			$query = "select dia from dias where dia not in (31) order by dia";
		}		
		
		$result = mysqli_query($link, $query);
		while($fetch = mysqli_fetch_assoc($result)){
			array_push($dias, $fetch);
		}
		return $dias;
	}
	
	function getHoras($link){
	
		$horas = array();
		$query = "select hora from horas order by hora";
		$result = mysqli_query($link, $query);
	
		while($fetch = mysqli_fetch_assoc($result)){
			array_push($horas, $fetch);
		}
		return $horas;
	}
	
	
	function getAgendamentos($link){
	
		$agendamentos = array();
		$query = "select * from agendamentos order by mes, dia, hora";
		$result = mysqli_query($link, $query);
	
		while($fetch = mysqli_fetch_assoc($result)){
			array_push($agendamentos, $fetch);
		}
		return $agendamentos;
	}
?>