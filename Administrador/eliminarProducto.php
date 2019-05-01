<?php
$producto; //variable global
consultaSQL($_GET['id']); //Llamada a ala funcion
metodoPOST($_GET['id']);



/* Realiza la consulta SQL recibiendo como parametro el valor en la URL  */
function consultaSQL($id)
{
	include('../conexion.php');
	$sql = "SELECT * FROM producto WHERE idProducto = '$id'";
	$r = $conexion->query($sql);
	if($r != false){
		global $producto;
		$producto = $r->fetchAll(PDO::FETCH_NAMED);

	}
	else{
		echo 'Hubo un problema';
	}
}

function metodoPOST($id)
{
	include('../conexion.php');
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		global $producto;
		$sql = "DELETE FROM producto WHERE idProducto = '$id'";
		$r = $conexion->exec($sql);
		if($r != false)
		{
			header('Location: administrador.php');

		}
		else{
			echo 'No se pudo eliminar';
		}
	}
}




?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<br>
	<br>
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th>id</th>
					<th>Nombre</th>
					<th>Caracteristicas</th>
					<th>Imagen</th>
					<th>Precio</th>

				</tr>
			</thead>
			<tbody>
				<tr>
					<td scope="row"><?php echo $producto[0]['idProducto'];  ?> </td>
					<td scope="row"><?php echo $producto[0]['nombre'];  ?> </td>
					<td scope="row"><?php echo $producto[0]['descripcion'];  ?> </td>
					<td > <img src="..\\productos\\<?php echo $producto[0]['imagen']?>" alt="" width="200px"> </td>
					<td scope="row"><?php echo $producto[0]['precio'];  ?> </td>

				</tr>
			</tbody>
		</table>	
		<hr class="bg-success">
		<form class="form" method="POST" accept-charset="utf-8" class="" enctype="multipart/form-data">
			<p class="alert alert-warning "><b style="font-family: Arial;">Desea eliminar este producto?</b></p>
			<a class="btn btn-warning" href="administrador.php"><b>Cancelar</b></a>
			<button class="btn btn-danger" type="submit"><b>Eliminar</b></button>

		</form>
		

	</div>

</body>
</html>