<?php

?>
<!DOCTYPE html>
<HTML lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<title>Principal</title>
</head>
<body class="bg-light">

	<?php include('encabezado.php')?>
	<br><br><br>
	<div class="container alert-info alert-link py-3">
		<div class="row">
			<h2 class="col-8">INFORMACIÓN DEL PRODUCTO</h2>
		</div>
		<hr>
		<form action="" method="POST" accept-charset="utf-8" class="" enctype="multipart/form-data">
			<div class="row">
				<div class="col"> 
					<label for="">Nombre del Producto</label>
					<input type="text" name="nombre" required>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<label>Información del Producto</label>    
				</div>
			</div>
			<div class="row">
				<div class="col">
					<textarea type="text" name="caracteristicas" style="width: 340px;" rows="4" placeholder="Caracteristicas..." required></textarea>
				</div>

			</div>
			<div class="row">
				<div class="col">
					<label for="">Precio</label>
					<input type="Number" name="precio" min="0" required>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<label for="">Cantidad</label>
					<input type="Number" name="cantidad" min="0" required>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<input type="file" name="imagen" class="btn btn-danger py-2" required>      
				</div> 
			</div>
			<hr>
			<button type="submit" name="enviar" class="btn btn-success">Subir a Base de Datos</button>
		</form>
		<hr>
	</div>
	<hr>
	<div class="container text-center">
		<h2>Base de Datos</h2>
		<table class="table">
			<thead>
				<tr>
					<th>id</th>
					<th>Nombre</th>
					<th>Caracteristicas</th>
					<th>Imagen</th>
					<th>Precio</th>
					<th>Configuración</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>

				</tr>
			</tbody>
		</table>

	</div>



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!--  FontAwesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> 
</body>
<!--
<div class="row">
		<div class="cp,"></div>			
			<i class="fas fa-user-circle text-danger" style=" font-size: 100px;"></i>

			
			</div>
-->