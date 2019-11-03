<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$base = "brinquedoteca";
	$link = mysqli_connect ( $host, $user, $pass, $base );	
	
	
	function getSala($link){
	
		$salas = array();
		$query = "select sala from sala";
		$result = mysqli_query($link, $query);
	
		while($fetch = mysqli_fetch_assoc($result)){
			array_push($salas, $fetch);
		}
		return $salas;
	}
	
?>