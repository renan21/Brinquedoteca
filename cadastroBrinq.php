<!DOCTYPE html>
<html>
	<head>	
   		<?php 	include('php/head.php');
   				include('php/conexao.php');
   		?> 
	<title></title>
	
	<script type="text/javascript">

		function validar(){			
		    var form = document.getElementById("formulario");	
			form.action = "php/salvarMaterial.php";			
			form.submit();
		}
			
	</script>	
	
	
	</head>
	<body>
		<?php	include('php/barra.php');	?>
		<h3 id="titulo">Cadastro de Instituições</h3>	
		
		<form id="formulario" method="POST">
		
			<label for="exampleFormControlSelect">Material</label> 
			<input class="form-control" type="text" placeholder="Default input" name="material">
			
			<label for="exampleFormControlSelect">Quantidade</label> 
			<input class="form-control" type="text" placeholder="Default input" name="quantidade">
										
			</br>
			
			<button type="button" class="btn btn-success" onClick="validar()" >Salvar</button>		
		
		</form>
		
	</body>
	
</html>