<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $filtro = $_POST['filtro'];
    echo $filtro;
    header('Location:producto.php?id='. $filtro);
}
?>

<?php
if(!isset($_SESSION['usuario'])){
    echo <<< HTML
    <!-- Inicio de sesion -->
    <div>
    <!-- Modal -->
    <div class="modal fade text-warning" id="iniciaSesion" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"></div>
        <div class="modal-body"><!-- login -->
            <div class="panel panel-default text-white">
                <div class="panel-heading text-white">
                    <h3 class="panel-title">Iniciar Sesión</h3>
                </div>
                <div class="panel-body">
        <form accept-charset="UTF-8" role="form" method="POST" action="bd/iniciosesion.php">
    <fieldset>
    <div class="form-group">
    <input class="form-control" placeholder="Correo Electronico" name="email" type="text" required>
    </div>
    <div class="form-group">
    <input class="form-control" placeholder="Contraseña" name="password" type="password" required>
    </div>
    <input class="btn btn-lg btn-success btn-block" type="submit" value="Acceder">
    </fieldset>
    </form>
    </div>
    </div>
    <!-- login -->
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Inicio de sesion -->
    </div>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Registrarse -->
HTML;
}
?>    


<nav class="navbar navbar-dark bg-info text-white"  >
  <!-- Navbar content -->
  <div class="container center">
  <div class="col-lg-3 col-md-3 col-sm-1 ">
    <img src="imagenes/crayon.png" width="100px">
</div>

    <div class="col-lg-2 col-sm-6 col-md-2 py-3 ">
         <form  method="POST" accept-charset="utf-8">
        <input type="text" name="filtro" placeholder="Nombre del articulo" class="custom-file-label">
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 pl-4  col-sm-12 ">
        <button type="submit" method="POST" class="btn btn-warning  text-white text-uppercase  font-weight-bold">Buscar</button>   
        </form>
         
    </div>
    

<?php if(!isset($_SESSION['email'])){
    echo <<< HTML1
    <div class="col-lg-2">
    <i class="fas fa-user-circle h1">  </i>
    <a class="text-white" href="#" onclick="iniciaSesion()"><b>Iniciar Sesión</b></a>      
    </div>
    <div class="col-lg-2 ">
    <a class="text-white" href="registroCliente.php"><b>Registrar</b></a>

    </div>
HTML1;
}else{
    echo '<div class="col-lg-3">
    <p class="text-white"> ';
    echo $_SESSION['email'];
    echo '</p>';
    echo '<a class="text-white" href="bd\cerrarsesion.php" >Cerrar Sesión</a>';
    echo '</div>';
}
?>
</div>
</nav>
<div class="bg-dark">
    <ul class="nav justify-content-end text-white">
        <li class="nav-item">
            <a class="nav-link text-white" href="principal.php"><b>Principal |</b></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="contacto.php">Contacto |</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="producto.php">Producto |</a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white" href="historia.php">Historia |</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="perfilCliente.php">Perfil |</a>
        </li>

        <!--<li class="nav-item"><a class="nav-link text-white" href="#">Soporte |</a></li> -->
    </ul>
</div>