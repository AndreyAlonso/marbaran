<?php 
include('conexion.php');
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $apellidoPaterno = $_POST['apellidoPaterno'];
  $apellidoMaterno = $_POST['apellidoMaterno'];
  $nombres         = $_POST['nombres'];
  $email           = $_POST['email'];
  $password        = $_POST['password'];
  $calle           = $_POST['calle']; 
  $numero          = $_POST['numero'];
  $colonia         = $_POST['colonia'];
  $cp              = $_POST['cp'];
  $municipio       = $_POST['municipio'];
  $telefono        = $_POST['telefono'];
  if($email != "")
  {
    $sql = "INSERT INTO `cliente`(`idCliente`, `apellidoPaterno`, `apellidoMaterno`, `nombres`, 
    `municipio`, `colonia`, `calle`, `numero`, `cp`, `telefono`, `email`, `password`) 
    VALUES (null,'$apellidoPaterno','$apellidoMaterno','$nombres','$municipio','$colonia',
    '$calle','$numero','$cp' ,'$telefono' ,'$email', '$password')";
    $resultado = $conexion->query($sql);
    if($resultado == false){
      die("Error al momento de insertar en la base de datos");
    }
    else
    {
          header('Location:principal.php');            
    }
  }
}
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Registrar</title>
</head>
<body class="bg-secondary">
  <br>

  <div class="container border border-secondary bg-light">
    <br>
    <h1 style="font-family: arial"><b>Complete todos los campos</b></h1>
    <hr>
    <form method="POST">
      <hr class="bg-info">
      <div class="form-group">
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="ejemplo@marbaran.com">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="contraseña">
      </div>
      <hr class="bg-info">
      <div class="form-inline">
        <input type="text" class="form-control col-4" name="apellidoPaterno" placeholder="Apellido Paterno">
        <input type="text" class="form-control col-4" name="apellidoMaterno" placeholder="Apellido Materno">
        <input type="text" class="form-control col-4" name="nombres" placeholder="Nombres">
      </div>
      <hr class="bg-info">
      <h3>Dirección Personal</h3>
      <div class="form-inline">
      <input type="text" class="form-control col-4" name="calle" placeholder="Calle">
        <input type="text" class="form-control col-4" name="numero" placeholder="Número">
        <input type="text" class="form-control col-4" name="colonia" placeholder="Colonia">
        <input type="text" class="form-control col-4" name="cp" placeholder="Código Postal">
        <input type="text" class="form-control col-4" name="municipio" placeholder="Municipio">
        
      </div>
      <hr>
      <div class="form-group">
        <input type="text" class="form-control" name="telefono" placeholder="(444) 429 2590">
      </div>
      <hr>

      <button type="submit" class="btn btn-outline-success btn-lg btn-block "><b>Registrar</b></button>

    </form>
    <br>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>