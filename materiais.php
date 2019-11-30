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
				$materiais = getMateriais($link);
		
				if ($materiais != null)
						echo "
							<table class='table table-hover' id='grid'>
								<tr>
									<th><h3>Material</h3></th>									
									<th><h3>Quantidade</h3></th>
									<th></th>
									<th></th>
			
								</tr>"
   						
		?>
				<?php foreach($materiais as $material):?>
				
					<tr>
						<td><?= $material['MATERIAL'] ?></td>
						<td><?= $material['QUANTIDADE'] ?></td>
						<td><a href='php/excluirBrinq.php?id=<?= $material['ID'] ?>'><img src='menos.png'></a></td>
						<td><a href='cadastroBrinq.php?id=<?= $material['ID'] ?>'><img src='edit.png'></a></td>			
					</tr>
					
					<?php	endforeach ?>	  
			</table>
						
		<div id="rodape">
			<button type="button" class="btn btn-success" onclick="window.location.href = 'cadastroBrinq.php'">Novo material</button>
		</div>
	</body>
	
</html>