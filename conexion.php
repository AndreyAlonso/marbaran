<?php
/**
 * Conexion con la base de datos
 */
$fuente="mysql:host=localhost; port=3306;dbname=marbaranbd";
$usuario="root";
$contraseña="";
$conexion;

try
{
	global $conexion;
    $conexion= new PDO($fuente,$usuario,$contraseña);
}
catch(PDOException $ex)
{
    echo "<p>Ha ocurrido una excepcion ".$ex->getMessage() . "</p>";
}
?>