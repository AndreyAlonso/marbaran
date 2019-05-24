<?php

include('conexion.php');
include 'encabezado.php';
$precioProducto;
$idProducto = $_GET['idProducto'];
$existe = false;
$productosC = array();
$producto;
$total = 0; 
$num_rows;
$vacio;


if($idProducto == 0)
{
  global $conexion;

  $res = $conexion->prepare('SELECT COUNT(*) FROM detalleventa');
  $res->execute();
  $num_rows = $res->fetchColumn();
  //echo $num_rows;
  if($num_rows > 0)
  {
   // encuentraProducto();
   // agregaProducto();
    muestraProducto();
  }
  

}
else{

  encuentraProducto();
  agregaProducto();
  muestraProducto();
  $res = $conexion->prepare('SELECT COUNT(*) FROM detalleventa');
  $res->execute();
  $num_rows = $res->fetchColumn();
}


function encuentraProducto()
{
  global $precioProducto, $idProducto;
  global $conexion;
  global $idProducto;
  $consulta = "SELECT * FROM producto WHERE idProducto='$idProducto' ";
  $respuesta = $conexion->query($consulta);
  if($respuesta != false)
  {    
    $productos = $respuesta->fetchAll(PDO::FETCH_NAMED);
    $precioProducto =$productos[0]['precio'];
  }

}

function agregaProducto()
{
  global $conexion, $precioProducto, $idProducto;
  $cantidad = 1; 
  
  $sql = "INSERT INTO 
  `detalleventa`(`idDetalleVenta`, `idVenta`, `idProducto`, `cantidad`, `subtotal`)
  VALUES (null,0,'$idProducto','$cantidad','$precioProducto')";
  $r = $conexion->query($sql);
  if($r == false)
    die("ERROR al insertar");
  //else
    //echo 'BIEN';
}

function muestraProducto()
{
  global $conexion;
  global $productosC;
  global $total;
  $total = 0;
  $sql = "SELECT * FROM detalleventa";
  $sql2 = "SELECT * FROM producto";
  $r = $conexion->query($sql);
  if($r == false)
  {
    echo 'MAL EN MOSTRAER';
  }
  else{
   // echo 'bien en motrar';
    $prod = $r->fetchAll(PDO::FETCH_NAMED);
    $id = $prod[0]['idProducto'];
  //  echo $id;
    for($i = 0; $i < count($prod); $i++){
      array_push($productosC, $prod[$i]['idProducto']);

    }

    $r2 = $conexion->query($sql2);
    if($r2 != false)
    {
      global $productos;
      $productos = $r2->fetchAll(PDO::FETCH_NAMED);

    }

  }
}

/*

$id="";
if(isset($_GET['idProducto'])){

  $id = $_GET['idProducto']; 
  echo $id;
  $sql2 = "SELECT * FROM producto WHERE idProducto='$id' ";
  //1) verificar si ya existe en la lista 
  $busca = "SELECT * FROM detalleventa WHERE idProducto = '$id'";
  $b = $conexion->exec($busca);
  $r = $conexion->query($sql2);

  if($b == true)
  {
    echo 'Si hay';
    

  }
  if($r != false) 
  {
    echo 'No hay productos aqui';
    $productos = $r->fetchAll(PDO::FETCH_NAMED);
    for($i = 0; $i  < count($productos) ; $i++)
    {

      if($idProducto == $productos[$i]['idProducto'])
      {
        $idProducto = $i;

        $precio = $productos[$idProducto]['precio'];

      }
    }




    $add = "INSERT INTO `detalleventa`(`idDetalleVenta`, `idVenta`, `idProducto`, `cantidad`, `subtotal`) VALUES(null,null,$id,1,$precio)";

    $conexion->exec($add);
    echo 'heyyy';
  }



}
else {
  //$sql2 = 'SELECT * FROM producto WHERE existencias > 0';
}
/*
$r = $conexion->query($sql2);
if($r != false){
  $productos = $r->fetchAll(PDO::FETCH_NAMED);
}
else{
  echo '<br><br><br><div class="alert alert-danger alert-dismissible fade show container text-center " role="alert">';
  echo  'Ha ocurrido un problema con la base de datos';
  echo  '</div><br><br><br>';
}

*/
?>
<!doctype html>
<html lang="en">
<head>
  <title>Productos</title>
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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- Javascript -->
  <script type="text/javascript" src="js/codigo1.js"></script>
</head>
<body class="bg-light">
  <?php 
  if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $_SESSION['pagina'] = "producto.php";
  }
  ?>
  <div class="container col-11">
    <table class="table">
      <thead>
        <tr>

          <th>Imagen</th>
          <th>Nombre</th>
          <th>Caracteristicas</th>
          <th>Precio</th>

        </tr>
      </thead>
      <tbody>

        <tr>
          <?php if($num_rows > 0){ foreach($productos as $producto):?>
            <?php  if(in_array($producto['idProducto'],$productosC)) { ?>
              <tr>
                <td > <img src="<?php echo "productos\\".$producto['imagen']; ?>" alt="" width="200px"> </td>
                <td><?php echo $producto['nombre'];  ?></td>
                <td><?php echo $producto['descripcion'];  ?></td>
                <td class="alert-link alert-warning" > <strong>$<?php echo $producto['precio'];
                $total = $total +$producto['precio'];   ?>.00</strong>
                <br>  

              </td>



            </tr>
          <?php }


          ?>
        <?php endforeach; 
        echo '         </tr>
        </tbody>
        </table>

        </div>
        <br>

        <br>
        <br><div class="container">   
        <a class="btn btn-block btn-success py-3" href="ticket.php?pProducto=<?php echo $total;?>"> <b>Realizar Compra</b></a></div> <br>';
      }
      else{
        echo '  </tr>
        </tbody>
        </table>
        <br><br><br><br><h2 class="alert alert-success align-text-bottom py-5 text-center"><b>
        El carrito de compras esta vacio
        </b></h2><br><br><br>
        </div>';
      }
      ?>

      <br><br><br>
      <?php include 'pie.php';?>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
    </html>