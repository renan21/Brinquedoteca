<?php
	include('php/conexao.php');
?>
<html>
	<head>
		<?php 	include('php/head.php'); ?> 
		<title></title>
		
		<script type="text/javascript">

			function submitTheForm(type){
				
			    var form = document.getElementById("formulario");
					
				if(type == 1){
					form.action = "agendamento.php";					
				} else{
					form.action = "php/salvarAgendamento.php";
				}
				
				form.submit();
			}
			
		</script>
		
	</head>
	<body>	
	
	<?php	include('php/barra.php'); ?>
	<h3 id="titulo">Agendamento de salas</h3>
	
	<form id="formulario"  method = "GET">
  		<div class="form-group">
  			<label for="exampleFormControlSelect">Sala</label> 
  		    <select class="form-control"  name="salaSelect">
				<?php 
					$salas = getSala($link);			
					
					$salaJaDefinida = $_GET['salaSelect'];
					
					if($salaJaDefinida != null ){
						echo "<option name=".$salaJaDefinida.">".$salaJaDefinida."</option>";
					}
					
					foreach($salas as $sala){					
						if ($salaJaDefinida != $sala['sala']){
							echo "<option name=".$sala['sala'].">".$sala['sala']."</option>";
						}
					}
				?>
    		</select>
    		
    		
    		
    		    		
	     	<label for="exampleFormControlSelect">Mês</label>
	  		   <select class="form-control" name="mesSelect" onchange="submitTheForm(1)">
				<?php 
					$meses = getMeses($link);
				
					$mesJaDefinido = $_GET['mesSelect'];
				
					if($mesJaDefinido != null){
						echo "<option name=".$mesJaDefinido.">".$mesJaDefinido."</option>";
					} else {
						echo "<option value='' disabled selected>Selecione um mês...</option>";
					}
					foreach($meses as $mes){
						if($mesJaDefinido != $mes['mes']){
							echo "<option name=".$mes['id'].">".$mes['mes']."</option>";
						}
					}
				?>
	    	</select>   		

    		
    		
    		
    		<label for="exampleFormControlSelect">Dia</label>
  		    <select class="form-control" id="dia" name="diaSelect"> 
				<?php 
						
					if($mesJaDefinido != null){
						$dias = getDias($link, $mesJaDefinido);
						
						foreach($dias as $dia){
							echo "<option>".$dia['dia']."</option>";
						}
						
					} else {
						echo "<option value='' disabled selected>Selecione um mês...</option>";
					}
						

				?>
    		</select>
    		
    		
    		
    		
  		  	<label for="exampleFormControlSelect">Horário</label>
  		    <select class="form-control" id="horario" name="horaSelect">
				<?php
					$horas = getHoras($link);
					foreach($horas as $hora){
						echo "<option>".$hora['hora']."</option>";
					}
				?>
    		</select>
    		
    		
    		
    		
  		  	<label for="exampleFormControlSelect">Instituição</label>
  		    <select class="form-control" id="horario" name="horaSelect">
				<?php
					$horas = getHoras($link);
					foreach($horas as $hora){
						echo "<option>".$hora['hora']."</option>";
					}
				?>
    		</select>
    		    		
    		
    		
    		
  		  	<label for="exampleFormControlSelect">Responsável</label>
  		    <select class="form-control" id="horario" name="horaSelect">
				<?php
					$horas = getHoras($link);
					foreach($horas as $hora){
						echo "<option>".$hora['hora']."</option>";
					}
				?>
    		</select>
    		
  		</div>
  		<button type="button" class="btn btn-success" onClick="submitTheForm(2)" >Salvar</button>
  	</form>
				
	</body>

</html>