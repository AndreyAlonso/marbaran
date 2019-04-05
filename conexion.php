<?php

$fuente="mysql:host=localhost; port=3306;dbname=marbaranBD";
$usuario="root";
$contraseña="root";


try
{
    $conexion= new PDO($fuente,$usuario,$contraseña);
}
catch(PDOException $ex)
{
    echo "Ha ocurrido una excepcion ".$ex->getMessage();
}
?>