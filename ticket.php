<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'GET')
{
	include('conexion.php');
	$elimina = "DELETE FROM detalleventa";
	$consulta = $conexion->query($elimina);
}
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
  <body class="alert-secondary ">
  	<div class="text-center text-white py-3 " style="background: rgb(0, 32, 96);" >
  		<h1 style="font-family: Arial;">Ticket de compra</h1>
  	</div>
  	<br>
  	<div class="container">
  		<div class="row">
  			<div class="col-4"></div>
  			<div class="col">
  				<div class="card bg-light mb-3 align" style="max-width: 18rem;">
  					<div class="card-header text-center"><b>Detalle de Compra</b></div>
  					<div class="card-body">
  						<p class="card-text">Cliente <b><?php echo $email; ?></b></p>
  						<p>Fecha de compra: <b id="fecha"></b></p>
  						<p>Hora de compra: <b id="muestraHora"></b> </p>
  						<p>Total <b>$<?php echo $_GET['pProducto'];?>.00</b></p>
  						<hr class="bg-primary">
  						<p class="text-center"><b>Gracias por su compra</b></p>
  						<hr class="bg-primary">
  						<a href="principal.php" title="" class="btn btn-info btn-lg btn-block">Regresar</a>
  					</div>
  				</div>


  			</div>
  			<div class="col-4"></div>
  		</div>
  		

  	</div>



  	<!-- JAVASCRIPT -->
  	<script type="text/javascript">
  		diaSemana();
  		printTime(); 
  		function diaSemana() {
  			var miFechaActual = new Date();
  			day = miFechaActual.getDate() 
  			month = parseInt(miFechaActual.getMonth()) + 1 
  			year = miFechaActual.getFullYear()
  			document.getElementById('fecha').innerHTML = day + "/" + month + "/" + year;

  		}
  		function printTime (){
  			var d = new Date();
  			var hours = d.getHours();
  			var mins = d.getMinutes();
  			var secs = d.getSeconds();

  			var total = hours + ":" + mins + ":"+ secs;
  			document.getElementById('muestraHora').innerHTML = total;
  		}

  	</script>
  	<!-- JAVASCRIPT -->


  	<!-- Optional JavaScript -->
  	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
  	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
  </html>