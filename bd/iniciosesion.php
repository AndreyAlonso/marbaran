<?php
session_start();
?>

<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Iniciando Sesión</title>
</head>
<body>

    <?php
    include '../conexion.php';
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING);
        if($email != "" && $password != ""){
            $sql = "SELECT * FROM cliente WHERE email = :email";
            $sentencia = $conexion->prepare($sql);
            $sentencia->bindValue(':email', $email);
            $sentencia->execute();
            $datos = $sentencia->fetchObject(); 
            if($datos !== false){
                if($datos->password == $password)
                {
                    $_SESSION['email'] = $datos->email;
                //echo 'Usuario valido';
                    echo $datos->tipo;
                    if($datos->tipo == 1)
                    {
                        $t1 = 'Location: ..\\';
                        $t2 = $t1 . 'Administrador\administrador.php';

                    }
                    else{

                        $t1 = 'Location: ..\\';
                        $t2 = $t1 . $_SESSION['pagina']; 

                    }
                    header($t2);

                }
                else{
                    $error =  'Usuario o contraseña incorrectos';
            //    $t1 = 'Location: ..\\';
             //   $t2 = $t1 . $_SESSION['pagina']; 
               // header($t2);
               // header('Location:principal.php');
               // return;
                }
            }
            else{
                echo 'Usuario o contraseña no registrados';
          //  $t1 = 'Location: principal.php';
          //  $t2 = $t1 . $_SESSION['pagina']; 
          //  header($t2);
                return;
            }   
        }else{
            echo 'Campos incompletos';
        }
    }
    ?>
    <div class="container">
        <br><br><br>
        <p class="alert alert-danger"><b><?php echo $error;?></b></p>
        <a class="btn btn-info text-center" href="..\principal.php"> regresar </a>
    </div>

</body>