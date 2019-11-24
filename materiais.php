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
				$responsaveis = getResponsaveis($link);
		
				if ($responsaveis != null)
						echo "
							<table class='table table-hover' id='grid'>
								<tr>
									<th><h3>Nome</h3></th>									
									<th><h3>Endereço</h3></th>
									<th><h3>Telefone</h3></th>
									<th></th>
									<th></th>
			
								</tr>"
   						
		?>
				<?php foreach($responsaveis as $responsavel):?>
				
					<tr>
						<td><?= $responsavel['NOME'] ?></td>
						<td><?= $responsavel['ENDERECO'] ?></td>
						<td><?= $responsavel['TELEFONE'] ?></td>
						<td><a href='php/excluirInstituicao.php?id=<?= $responsavel['ID'] ?>'><img src='menos.png'></a></td>
						<td><a href='cadastroResp.php?id=<?= $responsavel['ID'] ?>'><img src='edit.png'></a></td>			
					</tr>
					
					<?php	endforeach ?>	  
			</table>
			
			Arrumar aqui, está a mesma tela que a de responsavel é deve ser a de meteriais!
			
		<div id="rodape">
			<button type="button" class="btn btn-success" onclick="window.location.href = 'cadastroBrinq.php'">Novo material</button>
		</div>
	</body>
	
</html>