<?php
include ('conexion.php');
$id = 0;
$productos = "";
$existencia = "";
//if($_SERVER['REQUEST_METHOD'] == 'GET'){
$idProducto = $_GET['id'];
$sql2 = "SELECT * FROM producto WHERE idProducto = '$idProducto'";
$r = $conexion->query($sql2);
if($r != false)
{
  $productos = $r->fetchAll(PDO::FETCH_NAMED);
  for($i = 0; $i  < count($productos) ; $i++)
  {
    if($idProducto == $productos[$i]['idProducto'])
    {
      $idProducto = $i;
      $existencia = $productos[$idProducto]['existencias'];
    }
  }
}
else{
  echo 'Hubo un problema';
}
$nn  = $productos[$idProducto]['nombre'];
$_SESSION['nombre'] = $productos[$idProducto]['nombre'];
 //echo "id = $id <br> nombre = $nn <br>";
//echo '<br>';
$pp =  $productos[$idProducto]['precio'];
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $_SESSION['nombre'] = $productos[$idProducto]['nombre'];
  $_SESSION['nombre'] = $productos[$idProducto]['nombre'];
  $_SESSION['precio'] = $productos[$idProducto]['precio'];
 // $link = "Location:formadePago.php?id=SIN SERVICIO &precioS=NA &nProducto=" . $nn;
 // header($link);
 // $t1 = 'Location:formadePago.php';
  //$t2 = $t1 . "?id=" . $id;
 // header($t2);
}
?>

<!doctype html>
<html lang="en">
<head>
  <title>Papeleria</title>
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
  <link rel="stylesheet" type="text/css" href="css/contacto.css" />
  <link rel="stylesheet" type="text/css" href="css/Menu.css" />
  <!-- Javascript -->
  <script type="text/javascript" src="js/codigo1.js"></script>
</head>
<body class="bg-light">
  <?php include 'encabezado.php';?>
  <div class="container"> 
    <h2 class="text-center"><?php   echo $productos[$idProducto]['nombre'];  ?></h2>
    <hr>
    <div class="row">
      <div class="col">
        <img src="<?php echo "productos\\".$productos[$idProducto]['imagen'];  ?>" alt="" width="100%">
        
        
      </div>
      <div class="col">
        <ul>
          <li><?php echo $productos[$idProducto]['descripcion'];  ?></li>
        </ul>
        
      </div>
      <div class="col text-center">
        <p class="alert alert-warning text-center"><strong>$<?php echo $productos[$idProducto]['precio'];  ?>.00</strong> </p>
        <form action="" method="POST" accept-charset="utf-8">

        <!-- <button type="submit" class="btn btn-success text-center">Comprar</button>-->
         <a href="ticket.php?nProducto=<?php echo $nn;?>&pProducto=<?php echo $pp;?>" title="" class="btn btn-info btn-block">Comprar</a>
          <a href="carritoCompra.php?idProducto=<?php echo $_GET['id'];?>" title="" class="btn btn-success btn-block">Agregar al Carrito</a>
          <br>
       </form>
<p class="bg-secondary text-white text-center font-weight-bold py-3">Cantidad en tienda: <strong><?php echo $existencia;?></strong> </p>
     </div>


   </div>
   <hr>
   
   <div class="row">

    <p class="text-justify">POLITICA DE VENTAS ONLINE<br/>

      Recepción y entrega de pedidos<br/>

      La tienda virtual  está disponible para toma de pedidos las 24 horas todos los días.<br/>
      La entrega de los pedidos está sujeta a las siguientes condiciones:<br/>
      •    Los productos se entregan dentro de las 24 horas siguientes a la confirmación de la aprobación del pago del pedido.<br/>
      •    Horario de entrega es lunes a sábado de 8:00 AM a 6:00 PM. Domingos y festivos de 9:00 AM a 3:00 PM<br/>
      •    Si el pedido ingresa después de las 5:00 PM, las 24 horas empiezan a contar a partir de las 8.00 AM del día siguiente.<br/>
      •    Las entregas se realizan todos los días incluyendo domingos y festivos cumpliendo con las anteriores condiciones.<br/>
      •    Los datos de entrega deben estar completos y correctamente diligenciados, de tal manera que la entrega sea exitosa.<br/>
      •    La nomenclatura suministrada para la entrega del pedido debe corresponder al municipio y barrio indicado, así evitar la devolución de la orden.<br/>
    </p>
  </div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $_SESSION['nProducto'] = $productos[$id]['nombre'];
  $_SESSION['nombreProducto'] = $productos[$id]['nombre'];
  $_SESSION['precio'] = $productos[$id]['precio'];
  $link = "Location:formadePago.php?id=SIN SERVICIO &precioS=NA &nProducto=" . $nn;
  header($link);
 // $t1 = 'Location:formadePago.php';
  //$t2 = $t1 . "?id=" . $id;
 // header($t2);
}
?>