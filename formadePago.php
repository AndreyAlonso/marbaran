<?php
include 'conexion.php';
    include 'encabezado.php';   
    if(isset($_GET['nProducto']))
        $_SESSION['nombreproducto'] = $_GET['nProducto'];  
    $_SESSION['precio'] = $_SESSION['precio'];
      $_SESSION['nombre'] = "dd";
    if($_SERVER['REQUEST_METHOD'] == 'GET'){

     //     $_SESSION['nombreproducto'] = $_SESSION['nombreproducto'];
          $_SESSION['servicio'] = $_GET['id'];

          $_SESSION['precioS'] = $_GET['precioS'];
        $_SESSION['precio'] = $_SESSION['precio'];
   }

     
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(isset($_POST['nombre']) && isset($_POST['ciudad']) && isset($_POST['tarjeta']))
  {
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['ciudad'] = $_POST['ciudad'];
    $_SESSION['tarjeta'] = $_POST['tarjeta']; 

    header('Location: recibo.php');
  }
}


?>
<!doctype html>
<html lang="en">

<head>
    <title>VentasPC</title>
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
    <!-- BODY -->
    
    
    
    <!-- *************************NAVBAR ********************************************************* -->
    <br/>
    
    <!--++++++++++++++++++++++++++++++++++++++++ FORMA DE PAGO ++++++++++++++++++++++++++++++++++++++++ -->

    <div class="container">
        <h1>Complete los campos necesarios</h1>
        <p class="text-danger"> <strong>* Campos Obligatorios </strong> </p>

        <form class="form-group " action="" method="POST" accept-charset="utf-8">
            <p class="alert bg-info text-white">Datos del Cliente</p>
            <div class="form-inline">
                <label for="">Nombre</label>
                <?php if(isset($_SESSION['usuario'])):?>
                <input type="" name="nombre" class="form-control ml-3" value="<?php echo $_SESSION['usuario']?>" required>
                <?php else:?>
                    <input type="" name="tarjeta" class="form-control ml-3" value="" required>
                <?php endif?>
                <p class="text-danger ml-2"> <strong>*</strong> </p>

            </div>
            <br>
            <div class="form-inline">
                <label for="">Ciudad</label>
                <input type="" name="ciudad" class="form-control ml-4" required>
                <p class="text-danger ml-2"> <strong>*</strong> </p>
            </div>
            <br>
            <p class="alert bg-info text-white">Detalles del pago</p>
            <div class="form-inline">
                <label for="">Numero de la tarjeta </label>
                <?php if(isset($_SESSION['tarjeta'])):?>
                    <input type="" name="tarjeta" class="form-control ml-3" value="<?php echo $_SESSION['tarjeta']?>" required>
                <?php else:?>
                    <input type="" name="tarjeta" class="form-control ml-3" value="" required>
                <?php endif?>
                <p class="text-danger ml-2 mr-3"> <strong>*</strong> </p>
                <img src="img2/visa.jpg" width="50px" class="mr-2">
                <img src="img2/mastercard.png" width="50px" class="mr-2">
                <img src="img2/amex.jpg" width="50px">
            </div>
            <br>
            <div class="row">
                <p class="alert alert-info col-2 py-5 text-center">Fecha de expiración</p> 
                <div class="row">
                    <div class="form-group">
                        <div class="form-inline mt-3 ml-2 ">
                            <label for="" class="ml-3">Año</label>
                            <input type="" name="año" class="form-control ml-3">
                        </div>
                        <div class="form-inline mt-3 ml-2">
                            <label for="" class="ml-3 ">Mes</label>
                            <input type="" name="mes" class="form-control ml-3">
                        </div>
                    </div> 
                </div>
            </div>
            <div class="form-inline">
                <label for="">Numero de verificación de tarjeta (CVV2) </label>
                <input type="" name="cvv2" class="form-control ml-3">
                
            </div>
            
            <p class="alert bg-info text-white">Realizar Pago</p>
            <!--<button type="submit" class="btn btn-danger">Cancelar</button>-->
            <a href="principal.php" title="" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-success">Aceptar</button>
        </form>

        <p class="alert alert-warning">Una vez realizado el pago no hay devoluciones</p>
    </div>
    <!--++++++++++++++++++++++++++++++++++++++++ FORMA DE PAGO ++++++++++++++++++++++++++++++++++++++++ -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ"
    crossorigin="anonymous"></script>
</body>

</html>