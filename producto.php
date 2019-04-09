<?php

include('conexion.php');
include 'encabezado.php';
$id="";
if(isset($_GET['id'])){

  $id = $_GET['id']; 
  echo $id;
  $sql2 = "SELECT * FROM inventario WHERE nombre LIKE '%$id'  ";
}
else {
  $sql2 = 'SELECT * FROM inventario WHERE cantidad > 0';
}
$r = $conexion->query($sql2);
if($r != false){
  $productos = $r->fetchAll(PDO::FETCH_NAMED);
}
else{
  echo '<br><br><br><div class="alert alert-danger alert-dismissible fade show container text-center " role="alert">';
  echo  'Ha ocurrido un problema con la base de datos';
  echo  '</div><br><br><br>';
}


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
          <?php foreach($productos as $producto):?>
            <tr>
              <td > <img src="<?php echo "inventario\\".$producto['imagen']; ?>" alt="" width="200px"> </td>
              <td><?php echo $producto['nombre'];  ?></td>
              <td><?php echo $producto['descripcion'];  ?></td>
              <td class="alert-link alert-warning" > <strong>$<?php echo $producto['precio'];  ?>.00</strong>
                <br>  
                  <a href="compra.php?id=<?php echo $producto['id_producto'];?>" class="btn btn-success" title="">Comprar</a>
              </td>

              
              
          </tr>
      <?php endforeach?>
  </tr>
</tbody>
</table>

</div>

<?php include 'pie.php';?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>