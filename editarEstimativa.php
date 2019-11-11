<?php

$id = $_GET['id'];
	include "php/conexao.php";

	$query = "select * from estimativa where id = '$id'";
	
	$id;
	$atividade;
	$sistema;
	$esforco;
	$campo1;
	$desc1;
	$campo2;
	$desc2;
	$campo3;
	$desc3;
	$campo4;
	$desc4;
	$campo5;
	$desc5;
	$dtde;
	$dtate;
	$controle;
	$deacordo;
	$emailenviado;
	$assuntoemail;
	$dtcriacao;
	$campo6;
	$campo7;
	$desc6;
	$desc7;
	
	if($result = mysqli_query($link, $query)){
		
		while($fetch = mysqli_fetch_row($result)){			
			$id = $fetch[0];
			$atividade = $fetch[1];
			$sistema = $fetch[2];
			$esforco = $fetch[3];
			$campo1 = $fetch[4];
			$desc1 = $fetch[5];
			$campo2 = $fetch[6];
			$desc2 = $fetch[7];
			$campo3 = $fetch[8];
			$desc3 = $fetch[9];
			$campo4 = $fetch[10];
			$desc4 = $fetch[11];
			$campo5 = $fetch[12];
			$desc5 = $fetch[13];
			$campo6 = $fetch[14];
			$desc6 = $fetch[15];
			$campo7 = $fetch[16];
			$desc7 = $fetch[17];
			$dtde = $fetch[18];
			$dtate = $fetch[19];
			$controle = $fetch[20];
			$deacordo = $fetch[21];
			$emailenviado = $fetch[22];
			$assuntoemail = $fetch[23];
			$dtcriacao = $fetch[24];			
		}
			 
	}

	function data($data){
		return date("d/m/Y", strtotime($data));
	}
?>
<!DOCTYPE html>
<html>
	<head>	
	<?php header('Content-type: text/html; charset=iso-8859-1');?>
   		<?php 	include('php/head.php'); ?> 
		
   		<title>Estimativas</title>
   		<script type="text/javascript">


   		

			function  criaCampo($campo1, $desc1, $campo2, $desc2, $campo3, $desc3, $campo4, $desc4, $campo5, $desc5, $campo6, $desc6, $campo7, $desc7){
				var count = 0;
				
				if ($campo1 != 0){
					insereHTML($campo1, $desc1, 1);
					if($campo2 != 0){
						insereHTML($campo2, $desc2, 2);
						if($campo3 != 0){
							insereHTML($campo3, $desc3, 3);
							if($campo4 != 0){
								insereHTML($campo4, $desc4, 4);
								if($campo5 != 0){
									insereHTML($campo5, $desc5, 5);
									if($campo6 != 0){
										insereHTML($campo6, $desc6, 6);
										if($campo7 != 0){
											insereHTML($campo7, $desc7, 7);
										}
									}
								}
							}
						}
					}
				}
				
				
			}
			
			function insereHTML($campo, $descricao, $n){
				$("#alvo").append("<div><span>"+$descricao+":</span><input type='hidden' value='"+$descricao+"' name='descricao"+$n+"'> <input type='text' class='form-control form-control-sm int' name='campo"+$n+"' id='campo"+$n+"' value='"+$campo+"'><button type='button' class='remover' onclick='excluir()'><img src='menos.png'></button></div>");
			}
   			function contarCampos(){
   				var campo1 = document.getElementById('campo1');
            	var campo2 = document.getElementById('campo2');
            	var campo3 = document.getElementById('campo3');
            	var campo4 = document.getElementById('campo4');
            	var campo5 = document.getElementById('campo5');
            	var campo6 = document.getElementById('campo6');
            	var campo7 = document.getElementById('campo7');
            	
                n = 1;
                if (campo1){
					n++;
                }
                if (campo2){
                	n++;
             	}
                if (campo3){
                	n++;
            	 }
                if (campo4){
                	n++;
            	 }
                if (campo5){
                	n++;
            	 }
                if (campo6){
                	n++;
            	 }
                if (campo7){
                	n++;
            	 }
           	 return n;
   	   		}
   			$(function() {

   				n = contarCampos();
   				m = 8;

   				$("#adiciona").click(function (e) {
   					var nomeCampo = prompt("Digite o nome do novo campo", "Ex. Extração de linhas...");
   					e.preventDefault();
   					if(nomeCampo != "Ex. Extração de linhas..." && nomeCampo != null){  
	   					if (n < m) {
	   		   				if (n == 0){
	   							n=1;
	   		   	   	   		}
	   						$("#alvo").append("<div><span>"+nomeCampo+":</span><input type='hidden' value='"+nomeCampo+"' name='descricao"+n+"'> <input type='text' class='form-control form-control-sm int' name='campo"+n+"' id='campo"+n+"'><button type='button' class='remover'><img src='menos.png'></button></div>");
							$(".remover").click(function(e) {
	   						e.preventDefault();     
	   						$(this).parent("div").remove();
	   						n--;
	
	   						if(n==-1) n=0;
	   							});
	   							n++;	
	   					}
   					}else{
						alert("Insira um nome para o novo campo!");
   	   					}
   				});

   			});
   			
            $(function() {
            	$('.datetimepicker1').datetimepicker();
            });

            function validarDados(){
          	  
            	if(document.dados.atividade.value=="" )	{
            		alert( "Preencha campo ATIVIDADE corretamente!" );
            		document.dados.atividade.focus();
            		return false;
            	}
            	  
            	  
            	if( document.dados.sistema.value==""){
            		alert( "Preencha campo SISTEMA corretamente!" );
            		document.dados.sistema.focus();
            		return false;
            	}
            	  
            	if (document.dados.esforco.value==""){
            		alert( "Preencha o campo ESFORÇO!" );
            		document.dados.esforco.focus();
            		return false;
            	}

            	if (document.dados.emailEnv.checked){
					if (document.dados.assunto.value==""){
            			alert( "Informe o assunto do e-mail!" );
            			document.dados.emailEnv.focus();
            			return false;
					}
                }
            	
            	if (n == 1 && document.dados.campo1.value==""){
            		alert( "Deve haver ao menos uma justicativa!" );
            		return false;
                } else{
                	var campo1 = document.getElementById('campo1');
                	var campo2 = document.getElementById('campo2');
                	var campo3 = document.getElementById('campo3');
                	var campo4 = document.getElementById('campo4');
                	var campo5 = document.getElementById('campo5');
                	var campo6 = document.getElementById('campo6');
                	var campo7 = document.getElementById('campo7');
                    
                    if (campo1){
                        if(document.dados.campo1.value=="" || isNaN(document.dados.campo1.value)){                           
                			alert( "Preencha as justificativas corretamente 1!" );
                			document.dados.campo1.focus();
                			return false;
                        }
                     }
                    if (campo2){
                        if(document.dados.campo2.value=="" || isNaN(document.dados.campo2.value)){                           
                			alert( "Preencha as justificativas corretamente 2!" );
                			document.dados.campo2.focus();
                			return false;
                        }
                 	}
                    if (campo3){
                        if(document.dados.campo3.value=="" || isNaN(document.dados.campo3.value)){                           
                			alert( "Preencha as justificativas corretamente 3!" );
                			document.dados.campo3.focus();
                			return false;
                        }
                	 }
                    if (campo4){
                        if(document.dados.campo4.value=="" || isNaN(document.dados.campo4.value)){                           
                			alert( "Preencha as justificativas corretamente!" );
                			document.dados.campo4.focus();
                			return false;
                        }
                	 }
                    if (campo5){
                        if(document.dados.campo5.value=="" || isNaN(document.dados.campo5.value)){                           
                			alert( "Preencha as justificativas corretamente!" );
                			document.dados.campo5.focus();
                			return false;
                        }
                	 }
                    if (campo6){
                        if(document.dados.campo6.value=="" || isNaN(document.dados.campo6.value)){                           
                			alert( "Preencha as justificativas corretamente!" );
                			document.dados.campo6.focus();
                			return false;
                        }
                	 }
                    if (campo7){
                        if(document.dados.campo7.value=="" || isNaN(document.dados.campo7.value)){                           
                			alert( "Preencha as justificativas corretamente!" );
                			document.dados.campo7.focus();
                			return false;
                        }
                	 }
                }
  
            	return true;
            	}			

			function limpaDataNula(){

				var data1 = document.getElementById('dataAte').value;
				var data2 = document.getElementById('dataDe').value;
				var mydate1 = new Date(data1);
				var mydate2 = new Date(data2);
				

				if(mydate1 < new Date()){
					document.getElementById('dataAte').value=''
				}
				if(mydate2 < new Date()){
					document.getElementById('dataDe').value=''
				}
			}

            function submeter($type) {

				if ($type == 1){
					document.getElementById("dados").setAttribute("action", "php/updateEstimativa.php?id=<?php echo $id;?>")
				} else {
					document.getElementById("dados").setAttribute("action", "php/imageTemplate.php?id=<?php echo $id;?>")
				}
                

            }
   			function excluir(){

				$(".remover").click(function(e) {
						e.preventDefault();     
						$(this).parent("div").remove();
						n--;

						if(n==-1) n=0;
							});

   	   			}
		</script>


		
	</head>
	<body onload="criaCampo(<?="'".$campo1."',"."'".$desc1."',"."'".$campo2."',"."'".$desc2."',"."'".$campo3."',"."'".$desc3."',"."'".$campo4."',"."'".$desc4."',"."'".$campo5."',"."'".$desc5."',"."'".$campo6."',"."'".$desc6."',"."'".$campo7."',"."'".$desc7."'"?>);limpaDataNula(); ">
	<?php	include('php/barra.php');	?>
		<div id="esquerda">
			<h1>Estimativa</h1>
			<form action="" method="POST" onSubmit="return validarDados();" name="dados" id="dados">
				<table class="grid">
					<tr> <td>Atividade:</td> <td><input type="text" class="form-control a" name="atividade" id="atividade" value="<?php echo $atividade?>"></td></tr>
					<tr> <td>Sistema:</td> <td><input type="text" class="form-control a"  name="sistema" id="sistema" value="<?php echo $sistema?>"></td></tr>
					<tr> <td>Esforço:</td> <td><input type="text" class="form-control a" name="esforco" id="esforco" value="<?php echo $esforco?>"></td></tr>
					<tr> <td>Justificativa:</td>
						 <td>
							<table  class="tabela">
						 		<tr><td><div id="alvo"></div></td></tr>
						 		<tr><td><button id="adiciona" ><img src="mais.png"></button></td></tr>
							</table>
						</td>
					</tr>
		   			<tr> <td>De:</td> <td>
		   								<div class='input-group date datetimepicker1'>
                    						<input type='text' data-date-format="DD/MM/YYYY" class="form-control" name="dataDe" id="dataDe" value="<?php echo data($dtde);?>"/>
                    						<span class="input-group-addon">
                                        		<span class="glyphicon glyphicon-calendar"></span>
                    						</span>
                  						</div>
		   						</td></tr>
		   			<tr> <td>Até:</td> <td>
		   								<div class='input-group date datetimepicker1'>
                    						<input type='text' data-date-format="DD/MM/YYYY" class="form-control" name="dataAte" id="dataAte" value="<?php echo data($dtate);?>"/>
                    						<span class="input-group-addon">
                                        		<span class="glyphicon glyphicon-calendar"></span>
                    						</span>
                  						</div>		   			
		   						</td></tr>
		   			<tr> <td>Controle interno:</td> <td><input type="text" class="form-control" name="controle" id="controle"value="<?php echo $controle?>"></td></tr>	
		   			<tr><td>Assunto e-mail:</td> <td><input type="text" class="form-control a" name="assunto" id="assunto"value="<?php echo $assuntoemail?>"></td></tr>		   			
		   			<tr><td></td>
    					<td><input type="checkbox" class="form-check-input" id="exampleCheck1" value="1" name="emailEnv" id="emailEnv" <?php if($emailenviado == 1){echo 'checked';}?>><label class="form-check-label" for="exampleCheck1">E-mail enviado.</label>
		   						<input type="checkbox" class="form-check-input a" value="1" name="deArc" id="deArc" <?php if($deacordo == 1){echo 'checked';}?>>
    							<label class="form-check-label a" for="exampleCheck1">De acordo retornado.</label></td></tr>
    				<tr><td></td>
    					<td><button class="btn btn-success" id="save" onclick="submeter(1)">Salvar</button>
    					<button class="btn btn-info" id="export" onclick="submeter(2)">Exportar</button></td></tr>
		   			   			
		   		</table> 
		   		
		   	</form>
   		 </div>   		
 	</body>
</html>	

