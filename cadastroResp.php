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
		
		<label for="exampleFormControlSelect">Nome</label> 
		<input class="form-control" type="text" placeholder="Default input" name="nome">
		
  		<label for="exampleFormControlSelect">Instituição</label>
  			<select class="form-control" id="horario" name="instituicao">
				<?php
					$instituicoes = getInstituicoes($link);
					foreach($instituicoes as $instituicao){
						echo "<option>".$instituicao['NOME']."</option>";
					}
				?>
    		</select>
				
		<label for="exampleFormControlSelect">Endereço</label> 
		<input class="form-control" type="text" placeholder="Default input" name="endereco">		

		<label for="exampleFormControlSelect">Telefone</label> 
		<input class="form-control" type="text" placeholder="Default input" name="telefone">
		
		</br>
		
		<button type="button" class="btn btn-success" onClick="validar()" >Salvar</button>		
		
		</form>
		
	</body>
	
</html>