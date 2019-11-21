<?php
		echo("
				<div id='barra' >
					<div id='tabela'>
						<table class='cabecalho' >
							<tr>
								<td class='cabecalho'><h5><a class='cabecalho' href='index.php'>Início</a></h4></td>
								<td class='cabecalho'><h5><a class='cabecalho' href='agendamento.php'>Agendamento</a></h4></td>
								<td class='cabecalho'>
									<h5>				
										<div class='dropdown show'>
									  		<a class='btn btn-secondary dropdown-toggle' href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
									    		Cadastros
									  		</a>
									
											<div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
									    		<a class='dropdown-item' href='cadastroInst.php'>Instituições</a>
									    		<a class='dropdown-item' href='cadastroResp.php'>Responsáveis</a>
									    		<a class='dropdown-item' href='cadastroBrinq.php'>Brinquedos</a>
									  			</div>
										</div>				
				
									</h5>
								</td>	
								<td class='cabecalho'><h5><a class='cabecalho' href=''>Sair</a></h4></td>			
							</tr>
						</table>
					</div>
				</div>
			")
?>