<?php
session_start();
include 'conexion.php';
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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>
<body class="alert-secondary">
	<div class="text-center text-white py-3 " style="background: rgb(0, 32, 96);" >
		<h1 style="font-family: Arial;">Ticket de compra</h1>
	</div>
	<br>
	<div class="container" >

		<div class="row">
			<div class="col-4"></div>
			<div class="col">
		     	<p>Cliente <strong><?php echo $email; ?></strong></p>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				
			</div>
			<div class="col">
				<p>Cantidad: <b>$<?php echo $_GET['pProducto'];?>.00</b></p>
			</div>
			
		</div>
		<div class="row">
			<div class="col-4">
				
			</div>

			
		</div>
		<div class="row">
			<div class="col-4">
				
			</div>

			
		</div>
		<div class="row">
			<div class="col-4">
				
			</div>
			
			
		</div>
		<div class="row">
			<div class="col-4">
				
			</div>

			
			
		</div>
		<div class="row">
			<div class="col-4">
				
			</div>
		
			
			
		</div>
		<div class="row text-center">
			<div class="col-3 text-center">	
			</div>
			<div class="col">
				<p class="alert alert-link  text-secondary alert-success">Gracias por su preferencia</p>
				
			</div>
			<div class="col-4">
				
			</div>

			
		</div>
		<a href="principal.php" title="" class="btn btn-info btn-lg btn-block">Regresar</a>
		</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	</body>
	</html>