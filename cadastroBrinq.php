<!DOCTYPE html>
<html>
	<head>	
   		<?php 	include('php/head.php');
   				include('php/conexao.php');
   		?> 
	<title></title>
	</head>
	<body>
		<?php	include('php/barra.php');	?>
		<h3 id="titulo">Cadastro de Instituições</h3>	
		
		<form id="formulario">
		
		<label for="exampleFormControlSelect">Brinquedo</label> 
		<input class="form-control" type="text" placeholder="Default input">
		
		<label for="exampleFormControlSelect">Quantidade</label> 
		<input class="form-control" type="text" placeholder="Default input">
						
		</br>
		
		<button type="button" class="btn btn-success" onClick="validar()" >Salvar</button>		
		
		</form>
		
	</body>
	
</html>