<?php include("menu.php");

?>
<!DOCTYPE html>
<html lang="en">
	<style>
		.carousel {
			width: 1280px;
			height: 200px;			
		}
		.painel{
			border: 2px solid black;
			border-color:#ECB11F;
			border-radius:8px;
			height:205px;
			width:180px;
			margin:10px;
			color:#ECB11F;
			font-size:16px;
			font-weight:bold;				
		}
		.painel:hover{
			box-shadow: 2px 2px 2px 0;
		}
		.img-painel{
			height:169px;
			width:170px;
			margin-top:5px;
			border-radius:5px;
		}
				
		a{text-decoration:none !important;}
		
		#table-descricao{
			margin-left:100px;
			margin-top:10px; 
		}
		#table-descricao td{
			padding:5px;			
		}
		.div-background{
			border:1px ;
			border-color: #009D98;
			background-image: linear-gradient(#007E7A,#009d98);
			height:300px;
			border-radius:30px;
			margin:5px;
			font-size:18px;
		}
		.div-video{
			border:3px solid black;
			border-color: #ECB11F;
			height:300px;
			border-radius:30px;
			width:400px;
			float:right;
			padding-right:30px:
			padding-top:15px;
			margin-top:15px;			
			margin-right:100px;
		}
		
		.div-login{
			border:3px solid black;
			border-color: #ECB11F;
			height:200px;
			border-radius:30px;
			width:400px;
			float:right;
			padding-right:30px:
			padding-top:10px;
			margin:5px;
			margin-top:20px;
			margin-right:100px;
		}
		
		.img-play{
			border-radius:30px;
			float:right;
			margin-top:55px;
			margin-right:20px;
		}
		.img-play:hover{
			box-shadow: 2px 2px 2px 0;
		}
		
		.lb-campo{
			text-align: right;
			clear: both;
			float:left;
			margin-top:10px;
			margin-left:75px;
		}
		.campo{
			width:150px;
			float:right;
			text-align:left;
			margin-top:10px;
			margin-right:75px;
		}			
		
		.btn-warning{			
			margin-left:300px;
			width:400px;
			height:50px;
			font-size:20px;
		}
		
		
		
		
	</style>
	<body>
		
		<!--CONTEÚDO-->
		<div align="center">
			<div id="conteudo" class="conteudo">
				<!--TABELA-->
				<div align="center">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
						  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						  <li data-target="#myCarousel" data-slide-to="1"></li>
						  <li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<img src="/projIntegMochuara/imagens/banner/01.jpg">
							</div>
							<div class="item">
								<img src="/projIntegMochuara/imagens/banner/02.jpg">
							</div>

							<div class="item">
								<img src="/projIntegMochuara/imagens/banner/03.jpg">
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						  <span class="glyphicon glyphicon-chevron-left"></span>
						  <span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">
						  <span class="glyphicon glyphicon-chevron-right"></span>
						  <span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<br>
				<br>

				<!--SOBRE-->
				<div class="div-background" >
					<h2 style="color:#ECB11F;"></h2>	
					<table border="0" align="center" width="700px" id="table-descricao" cellspacing="10">						
						<tr>
							<td>
								<p style="text-align: justify; text-justify: inter-word;">
								<br><br>
								Parque Municipal do Mochuara
Um maciço de granito a 11 km do litoral capixaba tem-se o Monte Mochuara. Desde 1990 pertence a uma área de preservação ambiental. O Parque Municipal foi criado para ser um local de proteção da natureza e centro de pesquisas ecológicas. Considerado o principal ponto turístico natural de Cariacica-ES. O local ainda não dispõe de estrutura de apoio a visitantes.
								<br><br>
								Visite o site da <a href="https://www.cariacica.es.gov.br/turismo">prefeitura</a>!
								</p>
							</td>
						</tr>						
					</table>
				</div>
				<br><br>
				
			</div>			
		</div>	
	</body>
</html>