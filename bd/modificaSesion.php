<?php
session_start();
?>

<html>
    <head>
        <title>Configurando Sesión</title>
    </head>
    <body>

<?php
include '../conexion.php';
// Obtencion de los datos dela tabla cliente
$email           = $_SESSION['email'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$nombres         = $_POST['nombres'];
$colonia         = $_POST['colonia'];
$municipio       = $_POST['municipio'];
$calle           = $_POST['calle'];
$numero          = $_POST['numero'];
$cp              = $_POST['cp'];
$telefono        = $_POST['telefono'];
//Generar consulta 
$sql = "UPDATE cliente 
SET apellidoPaterno='$apellidoPaterno', apellidoMaterno = '$apellidoMaterno', nombres = '$nombres',
    municipio='$municipio', colonia='$colonia', calle='$calle', cp='$cp', telefono='$telefono', numero='$numero' WHERE email='$email'";
$respuesta = $conexion->prepare($sql);
var_dump($sql);
if($respuesta == false)
    echo 'Hubo un problema al modificar la tupla';
else
{
  //  echo 'Se supone que todo bien';
    $respuesta->execute();
    $dir = '../' . "perfilCliente.php";
    echo $dir;
    header('Location: ../perfilCliente.php');

}


?>
<!--

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
                echo 'Usuario valido';
                $_SESSION['email'] = $datos->email;
                $t1 = 'Location: ..\\';
                $t2 = $t1 . $_SESSION['pagina']; 
                header($t2);
                
            }
            else{
                echo 'Usuario o contraseña incorrectos';

                $t1 = 'Location: principal.php';
                $t2 = $t1 . $_SESSION['pagina']; 
                header($t2);
             ///   header('Location:principal.php');
                return;
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
-->
</body>
</html>