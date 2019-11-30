<!DOCTYPE html>
<html>
	<head>	
   		<?php 	include('php/head.php');
   				include('php/conexao.php');
   		?> 
	<title></title>
	
	<script>

		function validar(){

			var form = document.getElementById("formulario");
			form.submit;
		}
	
	</script>
	
	</head>
	<body>
		<?php	include('php/barra.php');	?>
		<h3 id="titulo">Cadastro de Instituições</h3>	
		
		<form id="formulario" method="post" action="php/salvarInstituicao.php">
		
			<label for="exampleFormControlSelect">Nome</label> 
			<input class="form-control" type="text" placeholder="Default input" name="nomeInst">
			
			<label for="exampleFormControlSelect">CNPJ</label> 
			<input class="form-control" type="text" placeholder="Default input" name="cnpj">
					
			<label for="exampleFormControlSelect">Endereço</label> 
			<input class="form-control" type="text" placeholder="Default input" name="endereco">		
	
			<label for="exampleFormControlSelect">Telefone</label> 
			<input class="form-control" type="text" placeholder="Default input" name="telefone">
			
			</br>
			
			<button type="submit" class="btn btn-success" >Salvar</button>		
		
		</form>
		
	</body>
	
</html>