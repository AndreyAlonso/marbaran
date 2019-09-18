<?php

session_start();
$email = $_SESSION['email'];
session_unset($_SESSION['email']);
include('../conexion.php');

$sql = "DELETE FROM cliente WHERE email = '$email'";
$respuesta = $conexion->exec($sql);
var_dump($respuesta);
if($respuesta != false)
{
   echo ' Se ha eliminado la cuenta';
}
else{
	echo 'No se pudo eliminar';
}
//Se cierra la sesion
//se procede a eliminar 

$t1 = 'Location: ..\\';
$t2 = $t1 . $_SESSION['pagina']; 
header($t2);

//	echo 'Se ha eliminado la cuenta';

?>