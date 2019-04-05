<?php include 'conexion.php';
  header('Location:principal.php');
  ?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <title>Index</title>
</head>
<body class="alert-secondary" >
  <div class="text-white text-center" style="background-color: rgb(0, 32, 96);">
    <div class="row">
      <div class="col-2">
        <img src="imagenes/uaslp.png" alt="" width="100px">
      </div>
      <div class="col-8 py-2 mt-3">
        <h1>Index</h1>
      </div>
      
    </div>

  </div>
  <div class="container">
    <div class="row">
      <div class="col-2">

      </div>
      <div class="col">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Nombre de Archivo</th>
              <th>Extension</th>
              <th>Información</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="#" title="">Conexion</a></td>
              <td><strong>.php</strong> </td>
              <td>Establece la conexión con la base de datos</td>
            </tr>
            <tr>
              <td><a href="principal.php" title="">Principal</a></td>
              <td><strong>.php</strong> </td>
              <td>Página principal de la tienda, en ella está todo lo promocional.</td>
            </tr>
            <tr>
              <td><a href="producto.php" title="">Producto</a></td>
              <td><strong>.php</strong> </td>
              <td>Muestra el catalogo de todos los articulos en tienda  .</td>
            </tr>
            <tr>
              <td><a href="compra.php" title="">Compra</a></td>
              <td><strong>.php</strong> </td>
              <td>Ventana que muestra información detallada del producto antes de realizar la compra.</td>
            </tr>
            <tr>
              <td><a href="formadePago.php" title="">Formadepago</a></td>
              <td><strong>.php</strong> </td>
              <td>Formulario que requiere llenar todos los datos del cliente para realizar la compra.</td>
            </tr>
            <tr>
              <td><a href="servicios.php" title="">Servicios</a></td>
              <td><strong>.php</strong> </td>
              <td>Contiene todos los servicios de mantenimiento e instalación que ofrece la tienda.</td>
            </tr>
            <tr>
              <td><a href="historia.php" title="">Historia</a></td>
              <td><strong>.php</strong> </td>
              <td>Ventana con información sobre el desarrollo de la página.</td>
            </tr>
            <tr>
              <td><a href="contacto.php" title="">Contacto</a></td>
              <td><strong>.php</strong> </td>
              <td>Ventana que muestra toda la información para contactar al personal.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    
    

  </div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</body>
</html>