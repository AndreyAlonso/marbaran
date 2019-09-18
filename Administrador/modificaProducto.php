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
		$nombre = $_POST['nombre'];
		$precio = $_POST['precio'];
		$descripcion = $_POST['descripcion'];
		$cantidad = $_POST['cantidad'];
		$imagen = $_FILES['imagen']['name'];
		$tmp_name = $_FILES['imagen']['tmp_name'];
		move_uploaded_file($tmp_name, '..//productos//'.$imagen);
		$sql = "UPDATE producto SET 
		nombre='$nombre', precio='$precio', descripcion='$descripcion', existencias='$cantidad',
		imagen='$imagen' WHERE idProducto='$id'";

		$r = $conexion->prepare($sql);
		if($r == false){
			die("Error al momento de insertar en la base de datos");
		}
		else{
			$r->execute();
			echo 'todo bien';

			header("Location: administrador.php");
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
	<br><h2 class="col-8" style="font-family: Arial;"><b>INFORMACIÓN DEL PRODUCTO</b></h2>
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
			<p>Nombre Producto
				<input type="" name="nombre" value="<?php echo $producto[0]['nombre'];?> ">
			</p>
			<p>Caracteristicas</p>
			<textarea type="text" name="descripcion" style="width: 340px;" rows="4" placeholder="Caracteristicas..." required> <?php echo $producto[0]['descripcion'];?> </textarea>
			
			<p>Precio
				<input type="Number" name="precio" min="0" required value="<?php echo $producto[0]['precio'];?>">
			</p>
			<p>Cantidad
				<input type="Number" name="cantidad" min="0" required value="<?php echo $producto[0]['existencias'];?>">
			</p>
			<p>Imagen
				<input type="file" name="imagen" class="btn btn-info py-2 " value="<?php echo $producto[0]['imagen'];?>">
			</p>


			<a class="btn btn-warning" href="administrador.php"><b>Cancelar</b></a>
			<button class="btn btn-danger" type="submit"><b>Modificar</b></button>

		</form>
		

	</div>

</body>
</html>