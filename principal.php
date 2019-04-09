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
    <br>
<div class="container justify-content-center col-10  text-center ">

            <img src="imagenes/promocion.png"width="100%">
                 
       
            
            

        </div>
        <br>
        <br>
        <!-- SLIDER -->
        <div>
            <h2 class="bg-dark text-white container py-2">Aprovecha estas promociones</h2>
            <div class="container">
                <div class="row">
                    <div class ="col-lg-4 col-md-4 col-sm-12 py-4">
                        <a href="compra.php?id=<?php echo $productos[count($productos)-1]['id_producto'];?>" title="">
                            <div class="card" style="width: 15rem;">
                              <img src="<?php echo "inventario\\" . $productos[count($productos)-1]['imagen']; ?>" alt="" width="200px" class="card-img-top">
                              <div class="card-body text-center">
                                <p> <strong><?php echo $productos[count($productos)-1]['nombre']; ?></strong> </p>
                                <p> <?php echo $productos[count($productos)-1]['descripcion']; ?></p>
                            </div>
                        </a>
                    </div>

                </div>
                <div class ="col-lg-4 col-md-4 col-sm-12 py-4">
                    <a href="compra.php?id=<?php echo $productos[count($productos)-2]['id_producto'];?>" title="">
                        <div class="card" style="width: 15rem;">
                          <img src="<?php echo "inventario\\".$productos[count($productos)-2]['imagen']; ?>" alt="" width="200px" class="card-img-top">
                          <div class="card-body text-center">
                            <p> <strong><?php echo $productos[count($productos)-2]['nombre']; ?></strong> </p>
                            <p> <?php echo $productos[count($productos)-2]['descripcion']; ?></p>
                        </div>
                    </a>
                </div>

            </div>
            <div class ="col-lg-4 col-md-4 col-sm-12 py-4">
                <a href="compra.php?id=<?php echo $productos[count($productos)-3]['id_producto'];?>" title="">
                    <div class="card" style="width: 15rem;">
                      <img src="<?php echo "inventario\\" .$productos[count($productos)-3]['imagen']; ?>" alt="" width="200px" class="card-img-top">
                      <div class="card-body text-center">
                        <p> <strong><?php echo $productos[count($productos)-3]['nombre']; ?></strong> </p>
                        <p> <?php echo $productos[count($productos)-3]['descripcion']; ?></p>
                    </div>
                </a>
            </div>

        </div>



    </div>



</div>
</div>
</div>

<!-- Mision y vision -->
<div class="container">
    <div class="row">
        <div class="col-6">
            <h2 class="alert alert-primary">Misión</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="col-6">
            <h2 class="alert alert-primary">Visión</h2>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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