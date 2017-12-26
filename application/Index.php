<!DOCTYPE html>
<html lang="es">  
	<head>    
		<title>Cambiando Habitos con Mariale</title>    
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="http://localhost/habitos_saludables/css/estilos.css" />
	</head>  
	<body> 
		<div class="contenedor">

			<!-- Nuestro header y nuestro menu de navegacion -->
			
			<?php 
				include_once("templates/header.php") 
			?>
			
            <!-- Cuerpo de imagen y articulo -->
            
			<figure class="imagen1">
				<img src="../img/imagenprincipal.jpg" alt="imagen1"></img>
                    <div class="articuloPrincipal">
                        <div class="contenedorExterno">
                            <div class="contenedorInterior">
                                <article class="articulo1">
                                    <header class="headerInterno">
                                        <h1>CAMBIANDO HÁBITOS CON MARIALE</h1>
                                    </header>
                                    <div class="contenidoInterno">
                                        <p>
                                        Hola soy Mariale, en este blog encontraran todo sobre mi, ¿Quién soy?, mi salud, las bases de mi alimentación, sobre mi perdida de peso, 
                                        también encontrarán recetas y menús de los platos que consumo a diario.
                                        </p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
            </figure>
            
            <div class="contenedor2">
                <div class="aside1">
                    <aside class="aside">
                        <h3 class="guion">TARTA DE AVENA Y PLATANO ESTILO BROWNIE</h3>
                        <a title="tarta de avena y platano estilo brownie" href="#">
                            <img src="../img/tartabrownie.jpg" alt=""></img>
                        </a>
                    
                        <a class="textoPie" title="tarta de avena y platano estilo brownie" href="#">Leer más...</a>
                    </aside>           
                </div>
                
                <div class="aside2">
                    <aside class="aside">
                        <h3 class="guion">AREPAS DE ESPINACAS MUY RICAS Y SALUDABLES (HEALTHY)</h3>
                        <a title="arepas integrales" href="#">
                            <img src="../img/arepasintegrales.jpg" alt=""></img>
                        </a>
                    
                        <a class="textoPie" title="arepas integrales" href="#">Leer más...</a>
                    </aside>
                </div>
                <div class="aside3">
                    <aside class="aside">    
                        <h3 class="guion">CREPS DE HARINA DE TRIGO INTEGRAL Y SEMILLAS DE CHIA</h3>
                        <a title="creps de harina de trigo" href="#">
                            <img src="../img/creps.jpeg" alt=""></img>
                        </a>
                    
                        <a class="textoPie" title="cresps de harina de trigo" href="#">Leer más...</a>
                    </aside>
                </div>
            </div> 
            <!-- Nuestro Footer -->
			<?php 
				include_once("templates/footer.php") 
			?>			
		</div>
	</body>
</html>  