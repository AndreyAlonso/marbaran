<?php

include('../conexion.php');
if($_SERVER['REQUEST_METHOD'] == 'POST')
{


  $nombre = $_POST['nombre'];
  $precio = $_POST['precio'];
  $descripcion = $_POST['descripcion'];
  $existencias = $_POST['existencias'];

  $imagen = $_FILES['imagen']['name'];
  $tmp_name = $_FILES['imagen']['tmp_name'];
  move_uploaded_file($tmp_name, '..//productos//'.$imagen);
  $sql = "INSERT INTO `producto`(`idProducto`, `idProveedor`, `nombre`, `precio`, `descripcion`, `existencias`, `imagen`) VALUES (null,' ','$nombre','$precio','$descripcion','$existencias', '$imagen')";
  $resultado = $conexion->query($sql);

  if($resultado == false){
    die("Error al momento de insertar en la base de datos");
  }
  header("Location: administrador.php");
}
$sql2 = 'SELECT * FROM producto';
$r = $conexion->query($sql2);
if($r != false){
  $productos = $r->fetchAll(PDO::FETCH_NAMED);
}
else{
  echo 'Hubo un problema';
}
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <title>Administrador</title>
</head>
<body>
  <div class="bg-dark text-center text-white py-3">
    <h1 style="font-family: Arial;">Administración de Inventario</h1>
  </div>
  <hr>
  <div class="container py-3">
    <div class="row">
      <h2 class="col-8" style="font-family: Arial;"><b>INFORMACIÓN DEL PRODUCTO</b></h2>
    <a href="adminservicios.php" title="" class="btn btn-info disabled">Modificar servicios</a>
    <a href="promociones.php" title="" class="btn btn-info ml-2 disabled">Modificar promociones</a>
    </div>
    
    <hr>
    <form action="" method="POST" accept-charset="utf-8" class="" enctype="multipart/form-data">
      <div class="row">
        <div class="col"> 
          <label for="" class="text-primary"><b>Nombre del Producto</b></label>
          <input type="text" name="nombre" required>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col">
          <label class="text-primary"><b>Información del Producto</b></label>    
        </div>
        
      </div>
      <div class="row">
        <div class="col">
          <textarea type="text" name="descripcion" style="width: 340px;" rows="4" placeholder="Caracteristicas..." required></textarea>
          
        </div>
        
      </div>
      <hr>
      <div class="row">
        <div class="col">
          <label for=""class="text-primary"><b>Precio</b></label>
          <input type="Number" name="precio" min="0" required>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="" class="text-primary"><b>Cantidad</b></label>
          <input type="Number" name="existencias" min="0" required>
        </div>
        
      </div>
      
      <div class="row">
        <div class="col">
          <input type="file" name="imagen" class="btn btn-danger py-2 " required>      
        </div> 
        
      </div>
      <hr>
      <button type="submit" name="enviar" class="btn btn-success">Subir a Base de Datos</button>
      <a class="textblanco" href="..\bd\cerrarsesion.php" >Cerrar Sesión</a>
    </form>
    <hr>

    
  </div>
  <hr>
  <div class="container text-center">
    <h2 style="font-family:Arial, Helvetica, sans-serif;"><b>Base de Datos</b> </h2>
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>Nombre</th>
          <th>Caracteristicas</th>
          <th>Imagen</th>
          <th>Precio</th>
          <th>Configuración</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php foreach($productos as $producto):?>
            <tr>
              <td scope="row"><?php echo $producto['idProducto'];  ?> </td>
              <td><?php echo $producto['nombre'];  ?></td>
              <td><?php echo $producto['descripcion'];  ?></td>
              <td > <img src="..\\productos\\<?php echo $producto['imagen']?>" alt="" width="200px"> </td>
              <td> <strong><?php echo $producto['precio'];  ?></strong></td>
              <td> 
                <a href="eliminarProducto.php?id=<?php echo $producto['idProducto']?>" class="btn btn-danger" title="">Eliminar</a>
              </td>
              <td> <a href="modificaProducto.php?id=<?php echo $producto['idProducto']?>" class="btn btn-info" title="">Modificar</a> </td>

              
            </tr>
          <?php endforeach?>
        </tr>
      </tbody>
    </table>
    
  </div>
  


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>