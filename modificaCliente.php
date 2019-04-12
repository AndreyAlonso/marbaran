<?php
include 'conexion.php';
include 'encabezado.php';

$email = $_SESSION['email'];
$atributo = "";
$nombre = "";
$sql = "SELECT * FROM cliente WHERE email='$email' "; // Se obtiene la tabla del usuario
$respuesta = $conexion->query($sql);//$conexion es la variable usada en conexion.php
if($respuesta != false)
{
	$atributo = $respuesta->fetchAll(PDO::FETCH_NAMED);
    // $atributo = $respuesta->fetchArray();
    // $nombre =  $atributo['idCliente']['nombres'] . "  " .  $atributo['idCliente']['apellidoPaterno'];
	$nombre = $atributo[0]['nombres'];
}
else{
	echo 'Hubo un problema';

}
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script type="text/javascript" src="js/codigo1.js"></script>
	<title>Configuración Perfil</title>
</head>
<body>
	<div class="row">     
		<div class="col-md-3  col-sm-12">
			<div class="col-12 bg-light border border-success text-center">
				<div class="container align-items-start"> <img class="card-title " src="imagenes/user.png" width="30%"></div>

				<h2 style="font-family:arial; size: 12px;">Hola <?php echo $nombre; ?>!</h2> 
			</div>
			<div class="col-12 bg-light border border-success text-center">

				<ul class="list-group">
					<li class="list-group-item disabled"><a href="#" class="text-secondary disabled">Configuración perfil</a></li>
					<li class="list-group-item"><a href="modificaPassword.php" class="text-info">Modificar contraseña</a></li>
					<li class="list-group-item"><a href="#" class="text-info">Ver historial de compras</a></li>
					<li class="list-group-item"><a href="#" class="text-info">Ver pedidos</a></li>
					<li class="list-group-item"><a href="#" onclick="eliminaPerfil()" class="text-danger">Eliminar cuenta</a></li>
				</ul>
			</div>

		</div>
		<div class="col-md-8 col-sm-12 bg-light">
			<hr>
			<div class="container">
				<form method="POST" action="bd/modificaSesion.php">
					<h2>Datos personales</h2>
					<p class="bg-white text-info"><b>Configuración Nombre</b></p>
					<p>
					<b>Apellido Paterno</b> 
					<input type="text" class="form" name="apellidoPaterno" value=" <?php echo $atributo[0]['apellidoPaterno']?>"></p>
					<p><b>Apellido Materno</b> <input type="text" class="form" name="apellidoMaterno" value="<?php echo $atributo[0]['apellidoMaterno']?>"></p>
					<p><b>Nombres</b> <input type="text" class="form" name="nombres" value="<?php echo $atributo[0]['nombres']?>"><p>
					<p class="bg-white text-info"><b>Configuración Domicilio</b></p>

					<p><b>Colonia</b> <input type="text" class="form" name="colonia"  value="<?php echo $atributo[0]['colonia']?>"></p>
					<p><b>Calle</b> <input type="text" class="form" name="calle" value="<?php echo $atributo[0]['calle']?>"></p>
					<p><b>Número</b> <input type="text" class="form" name="numero" value="<?php echo $atributo[0]['numero']?>"></p>
				</div>
				<br>
				<button class="btn btn-success btn-lg btn-block" type="submit">Realizar Modificación</button>

			</form>

		</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>