<?php
	include('php/conexao.php');
?>
<html>
	<head>
		<?php 	include('php/head.php'); ?> 
		<title></title>
				
		<script type="text/javascript">
		

        	$(function() {
        		$('.datetimepicker1').datetimepicker();
       		});
        	
        	
			function submitTheForm(){

				var data = document.getElementById("dataSelect").value;
				var hora = document.getElementById("horario").value;				
				var dataHora = data + " " + hora;
				var dataSis = sysdate();
				
				alert(dataHora);

				
			    var form = document.getElementById("formulario");					
				form.action = "php/salvarAgendamento.php";
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
    		
 	     	<label for="exampleFormControlSelect">Data</label>
 	     	
 	     	<div class='input-group date datetimepicker1'>
            	<input type='text' data-date-format="DD/MM/YYYY" class="form-control" name="dataSelect" id="dataSelect"/>
                <span class="input-group-addon">
                	<span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
  		
    		
    		    		
<!--  	   ************************   logica antiga para data ************************

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
    		
    		************************* Fim da logica antiga *************************-->	
    		
    		
   		
    		
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
  		    <select class="form-control" id="horario" name="instSelect">
				<?php
					$instituicoes = getInstituicoes($link);
					foreach($instituicoes as $instituicao){
						echo "<option>".$instituicao['NOME']."</option>";
					}
				?>
    		</select>
    		    		
    		
    		
    		
  		  	<label for="exampleFormControlSelect">Responsável</label>
  		    <select class="form-control" id="horario" name="respSelect">
				<?php
					$responsaveis = getResponsaveis($link);
					foreach($responsaveis as $responsavel){
						echo "<option>".$responsavel['NOME']."</option>";
					}
				?>
    		</select>
    		
    		
    		
    		
    		
  <!-- só descomentar
  
  			 
  			 
  		*******************	  CARROSSEL PARA SELECIONAR PRODUTOS, NÃO FUNCIONA! 	************
  			  
  			  	
    		
    		<label for="exampleFormControlSelect">Materiais</label>    		
    		

			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  
				<ol class="carousel-indicators">
			    	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    	<li data-target="#myCarousel" data-slide-to="1"></li>
			    	<li data-target="#myCarousel" data-slide-to="2"></li>
			  	</ol>
			
			  
			  <div class="carousel-inner">
			    <div class="item active">
			      <h3>Materiais</h3>
			    </div> 
						    
 			  <?php
				$materiais = getMateriais($link);
					foreach($materiais as $material){
						echo "<div class='item'>
						 		<h3>".$material['MATERIAL']."</h3>
							  </div>";
					}
				?> 				    
			    
			    
			    
			  </div>
			
			  
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
			
			
			**************** FIM DO CARROSSEL PARA MATERIAIS ************************
    		 		
   aqui tambem, só descomentar --> 
   
   
  		</div>
  		<button type="button" class="btn btn-success" onClick="submitTheForm()" >Salvar</button>
  	</form>
  	
	</body>

</html>