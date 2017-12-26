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
				include_once("../templates/header.php") 
			?>
			<!-- cuerpo -->
			<div class="contenedorContacto">
				<header class="headerContacto">
					<h1>Contacto</h1>
				</header>
				<div class="contenedorFormulario">
					<form action="">
						<div>
							<label for="">Nombre</label>
							<span>(Necesario)</span>
							<input type="text">
						</div>
						<div>
							<label for="">Correo electrónico</label>
							<span>(Necesario)</span>
							<input type="text">
						</div>
						<div>
							<label for="">Sitio web</label>
							<input type="text">
						</div>
						<div>
							<label for="">Comentario</label>
							<span>(Necesario)</span>
							<input type="text">
						</div>
					</form>
				</div>
			</div>
            <!-- Nuestro Footer -->
			<?php 
				include_once("../templates/footer.php") 
			?>			
		</div>
	</body>
</html>  