<?php
include('conexion.php');
/*
$id = 0;
$sql2 = 'SELECT * FROM inventario';
$r = $conexion->query($sql2);
if($r != false){
  $productos = $r->fetchAll(PDO::FETCH_NAMED);

}
else{
  echo 'Hubo un problema';
}

$sql = "SELECT * FROM promociones";
$resp = $conexion->query($sql);
if($resp != false)
{
    $promos = $resp->fetchAll(PDO::FETCH_NAMED);
}
else{
    echo 'Hubo un problema';
}


*/
?>

<!doctype html>
<html lang="en">

<head>
    <title>Marbaran</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
    <!-- Estilos -->
    <link rel="stylesheet" type="text/css" href="css/principal.css" />
    <link rel="stylesheet" type="text/css" href="css/Menu.css" />
    <!-- Javascript -->
    <script type="text/javascript" src="js/codigo1.js"></script>
</head>

<body class="bg-light">
    <?php include 'encabezado.php';
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $_SESSION['pagina'] = "principal.php";
    }
    ?>

<!-- P R O M O C I O N E S-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagenes/promo1.png" class="d-block" height="400px" width="100%" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagenes/promo2.png" class="d-block" height="400px" width="100%" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- P R O M O C I O N E S-->
     
                 
       
            
            <br><br><br>

        </div>

        <!-- SLIDER -->

     



    </div>



</div>
</div>
</div>

<!-- Mision y vision -->
<div class="container">
    <div class="row">
        <div class="col-6">
            <h2 class="text-white  py-2 btn-lg" style="background-color: rgb(102,178,255);"><b>Misión</b></h2>
            <hr>
            <p>”Aprovechar la tecnología y la experiencia de nuestros empleados 
            para ofrecer a los consumidores la mejor experiencia de compra en internet”
            </p>
        </div>
        <div class="col-6">
            <h2 class="text-white  py-2 btn-lg" style="background-color: rgb(102,178,255);"><b>Visión</b></h2>
            <hr>
            <p>”Ser la empresa más centrada en el cliente del mundo, 
            donde los clientes pueden descubrir cualquier cosa que puedan querer comprar online, 
            y comprometerse a ofrecer los precios más bajos posibles”
            </p>
        </div>
    </div>
</div>
<!-- Mision y vision -->
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- Descarga Catalogo -->
<div class="modal-content py-3 text-center s">
    <a href="catalogo/catalogo.pdf" class="alert-link" download="catalogo">Descargar Catálogo</a>
</div>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
crossorigin="anonymous"></script>
</body>

</html> 