<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>JQUERY</title>
	<link rel="stylesheet" href="css/boostrap.min.css">
</head>
<body>
	<div class="container-md">
		<h1>Factorial De Un Número</h1>
		<div class="Form Factorial">
			<div class="input-group">
				<div class="input-group-text">#</div>
				
				<input class="form-control" type="number" name="numero" name="numero"
				id="numero" placeholder="número entero < 10">
				<button class="btn btn-primary" id="clacular">calcular factorial</button>

			</div>

		<div id="resultado"></div>
		<div class="gifCarga">
			<img src="images/loader.gif" alt="animacion" id="cargando">
		</div>
	</div>
	</div>
	
	
</body>
	<script src="js/boostrap.bundle.min.js"></script>
	<script src="js.jquery.min.js"></script>
	<script src="js/funciones.js"></script>
</html>