<!doctype html>
<html lang="en">

<head>
    <title>Contacto</title>
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
<?php include 'encabezado.php';
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $_SESSION['pagina'] = "contacto.php";
    }
    ?>   
<!--++++++++++++++++++++++++++++++++++++++++ CONTACTO ++++++++++++++++++++++++++++++++++++++++ -->
<br>
<div class="container">
    <div class="row">
        <div class ="col-4 py-4">
        <div class="card" style="width: 20rem;">
      <img class="card-img-top" src="imagenes/fb.jpg" alt="Card image cap">
      <div class="card-body text-center">
        <p> <strong>Sitio en facebook</strong> </p>
        <a href="#" title="" class="nav-link">https:://www.facebook.com/marbaran</a>
    </div>
    </div>
        
    </div>
    <div class ="col-4 py-4">
        <div class="card" style="width: 20rem;">
      <img class="card-img-top" src="imagenes/wpp.jpg" alt="Card image cap">
      <div class="card-body text-center">
        <p> <strong>Contacto Whatsapp</strong> </p>
        <p> 44 44 29 25 90</p>
    </div>
    </div>
        
    </div>
    <div class ="col-4 py-4">
        <div class="card" style="width: 22rem;">
      <img class="card-img-top" src="imagenes/youtube.jpg" alt="Card image cap">
      <div class="card-body text-center">
        <p> <strong>Siguenos en YouTube</strong> </p>
        <a href="#" title="" class="nav-link">https:://www.youtube.com/marbaran</a>
    </div>
    </div>
        
    </div>
        


    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</body>

</html>
