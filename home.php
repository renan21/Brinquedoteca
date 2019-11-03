<?php
	include('php/conexao.php');
?>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link type='text/css' rel='stylesheet' media='screen' href='estilo/estilo.css' />
		<title></title>
	</head>
	<body>	
	<div id="barra" ></div>
	<h3 id="titulo">Agendamento de salas</h3>	

	<form id="formulario">
  		<div class="form-group">
  			<label for="exampleFormControlSelect">Sala</label>
  		    <select class="form-control" id="exampleFormControlSelect">
					<?php 
				$salas = getSala($link);
				
				foreach($salas as $sala)
					echo "<option>".$sala['sala']."</option>";
				?>
    		</select>
    		
    		<br>
    		
    		<label for="exampleFormControlSelect">Data</label>
  		    <select class="form-control" id="exampleFormControlSelect">
      			<option>1</option>
      			<option>2</option>
      			<option>3</option>
      			<option>4</option>
      			<option>5</option>
    		</select>
    		
    		<br>
    		
  		  	<label for="exampleFormControlSelect">Horário</label>
  		    <select class="form-control" id="exampleFormControlSelect">
      			<option>1</option>
      			<option>2</option>
      			<option>3</option>
      			<option>4</option>
      			<option>5</option>
    		</select>
  		</div>
  		<button type="button" class="btn btn-primary">Salvar</button>
  	</form>
	
	
	</body>

</html>