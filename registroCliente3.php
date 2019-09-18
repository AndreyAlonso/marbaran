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
<body class="bg-lights">
  <nav class="navbar bg-primary py-3"></nav>
  <br>
  <div class="container">


      <h3>Dirección Personal</h3>
      <div class="form-inline">
        <input type="text" class="form-control col-4" name="municipio" placeholder="Municipio">
        <input type="text" class="form-control col-4" name="colonia" placeholder="Colonia">
        <input type="text" class="form-control col-4" name="calle" placeholder="Calle">
        <input type="text" class="form-control col-4" name="numero" placeholder="Número">
        <input type="text" class="form-control col-4" name="cp" placeholder="Código Postal">
      </div>
      <hr>
      <div class="form-group">
        <input type="text" class="form-control" name="telefono" placeholder="(444) 429 2590">
      </div>
      <hr>

      <button type="submit" class="btn btn-outline-success btn-lg btn-block "><b>Crear tu Cuenta</b></button>

    </form>
    <br>
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="registroCliente2.php">Anterior</a></li>
        <li class="page-item disabled"><a class="page-link" href="registroCliente2.php">Siguiente</a></li>
      </ul>
    </nav>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>