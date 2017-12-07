<!DOCTYPE html>
<html lang="es">  
	<head>    
		<title>Cambiando Habitos con Mariale</title>    
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilos.css" />
	</head>  
	<body> 
		<div class="contenedor">

			<!-- Nuestro header -->
			
			<?php 
				include_once("header.html") 
			?>
			
			<!-- Nuestro menú -->
			<nav>
				<ul>
					<!-- Primer nivel -->
					<li><a title="Inicio" href="#">INICIO</a></li>
					<li><a href="#">SOBRE MI</a>
						<ul class="subnivel">
							<!-- Segundo nivel -->
							<li><a href="#">¿Quién soy?</a></li>
							<li><a href="#">Mi salud</a></li>
							<li><a href="#">Bases de mi alimentación</a></li>
						</ul>
					</li>
					<li><a href="#">RECETAS</a>
						<ul class="subnivel">
							<li><a href="#">Desayunos</a>
								<ul class="subnivel">
									<!-- Tercer nivel -->
									<li><a href="#">Pan</a></li>
									
								</ul>
							</li>
							<li><a href="#">Comidas</a></li>
							<li><a href="#">Meriendas</a></li>
							<li><a href="#">Cenas</a></li>
						</ul>
					</li>
					<li><a href="#">CONTACTO</a></li>               
				</ul>
			</nav>
			<figure class="figure">
				<img src="https://cambiandohabitosconmariale.files.wordpress.com/2017/09/cropped-cropped-healthy-2462236_19201.jpg" alt="imagen1"></img>
				<h2>CAMBIANDO HABITOS CON MARIALE</h2>
				<p>
				Hola soy Mariale, en este blog encontraran todo sobre mi, ¿Quién soy?, mi salud, las bases de mi alimentación, sobre mi perdida de peso, 
				también encontrarán recetas y menús de los platos que consumo a diario.
				</p>
			</figure>
			<article>
				<div>
					<h3>TARTA DE AVENA Y PLATANO ESTILO BROWNIE</h3>
					<img src="" alt=""></img>
					<a title="tarta de avena y platano estilo brownie" href="#">xx</a>
								
				</div>
				<div>
					<h3>AREPAS INTEGRALES</h3>
					<img src="" alt=""></img>
				</div>
				<div>
					<h3>CREPS DE HARINA DE TRIGO INTEGRAL Y SEMILLAS DE CHIA</h3>
					<img src="" alt=""></img>
				</div>
			</article>
			
			<footer>
				<p>
					Sitio web creado por Mariale_263
				</p>
				
			</footer>
			
		</div>
	</body>
</html>  