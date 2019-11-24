<!DOCTYPE html>
<html>
	<head>	
   		<?php 	include('php/head.php');
   				include('php/conexao.php');
   		?> 
	<title></title>
	</head>
	<body>
		<?php	include('php/barra.php');				
				$instituicoes = getInstituicoes($link);
		
				if ($instituicoes != null)
						echo "
							<table class='table table-hover' id='grid'>
								<tr>
									<th><h3>Nome</h3></th>									
									<th><h3>CNPJ</h3></th>
									<th><h3>Endereço</h3></th>
									<th><h3>Telefone</h3></th>
									<th></th>
									<th></th>
			
								</tr>"
   						
		?>
				<?php foreach($instituicoes as $instituicao):?>
				
					<tr>
						<td><?= $instituicao['NOME'] ?></td>
						<td><?= $instituicao['CNPJ'] ?></td>
						<td><?= $instituicao['ENDERECO'] ?></td>
						<td><?= $instituicao['TELEFONE'] ?></td>
						<td><a href='php/excluirInstituicao.php?id=<?= $instituicao['ID'] ?>'><img src='menos.png'></a></td>
						<td><a href='cadastroInst.php?id=<?= $instituicao['ID'] ?>'><img src='edit.png'></a></td>			
					</tr>
					
					<?php	endforeach ?>	  
			</table>		
		<div id="rodape">
			<button type="button" class="btn btn-success" onclick="window.location.href = 'cadastroInst.php'">Nova instituição</button>
		</div>
	</body>
	
</html>