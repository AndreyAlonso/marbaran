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
$password = $_POST['password'];

//Generar consulta 
$sql = "UPDATE cliente 
SET password='$password' WHERE email='$email'";
$respuesta = $conexion->prepare($sql);
if($respuesta == false)
    echo 'Hubo un problema al modificar la tupla';
else
{
    //echo 'Se supone que todo bien';
    $respuesta->execute();
    $dir = '../' . "perfilCliente.php";
    echo $dir;
    header('Location: ../perfilCliente.php');

}


?>