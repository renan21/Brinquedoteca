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
				$agendamentos = getAgendamentos($link);
		
				if ($agendamentos != null)
						echo "
							<table class='table table-hover' id='grid'>
								<tr>
									<th><h3>Dia</h3></th>
									<th><h3>Mês</h3></th>
									<th><h3>Horário</h3></th>
									<th><h3>Sala</h3></th>
									<th><h3>Responsável</h3></th>
									<th></th>
									<th></th>
			
								</tr>"
   						
		?>
				<?php foreach($agendamentos as $agendamento):?>
				
					<tr>
						<td><?= $agendamento['DIA'] ?></td>
						<td><?= $agendamento['MES'] ?></a></td>
						<td><?= $agendamento['HORA'] ?></td>
						<td><?= $agendamento['SALA'] ?></td>
						<td>teste</td>
						<td><a href='php/excluirAgendamento.php?id=<?= $agendamento['ID'] ?>'><img src='menos.png'></a></td>
						<td><a href='agendamento.php?id=<?= $agendamento['ID'] ?>'><img src='edit.png'></a></td>			
					</tr>
					
					<?php	endforeach ?>	  
			</table>		
		
	</body>
	
</html>