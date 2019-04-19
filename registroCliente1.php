<?php 
include('conexion.php');
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $email           = $_POST['email'];
  $password        = $_POST['password'];
  $apellidoPaterno = $_POST['apellidoPaterno'];
  $apellidoMaterno = $_POST['apellidoMaterno'];
  $nombres         = $_POST['nombres'];
  $municipio       = $_POST['municipio'];
  $colonia         = $_POST['colonia'];
  $calle           = $_POST['calle']; 
  $numero          = $_POST['numero'];
  $cp              = $_POST['cp'];
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
<body class="">

  <div class="container ">
    <h1 style="font-family: arial"><b>Crear cuenta</b></h1>
    <hr>
    <form method="GET">
      <div class="form-group">
        <p><b>Tu nombre</b></p>
        <div class="form">
          <input type="text" class="form-control-plaintext col-lg-4 col-md-4 col-sm-12" 
                 name="nombres" placeholder="Nombres" style="border-bottom: thick double #32a1ce;">
          <input type="text" class="form-control-plaintext col-lg-4 col-md-4 col-sm-12" 
                 name="apellidoPaterno" placeholder="Apellido Paterno" style="border-bottom: thick double #32a1ce;">
          <input type="text" class="form-control-plaintext col-lg-4 col-md-4 col-sm-12" 
                 name="apellidoMaterno" placeholder="Apellido Materno" style="border-bottom: thick double #32a1ce;">
        </div>
        <hr>
        <P><b>Correo Electronico</b></P>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="ejemplo@marbaran.com">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="contraseña">
      </div>
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>
        <li class="page-item"><a class="page-link" href="registroCliente2.php? type="submit">Siguiente</a></li>
      </ul>
       </form>
    </nav>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>