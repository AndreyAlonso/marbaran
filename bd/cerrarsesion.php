<?php
session_start();
session_unset();
$t1 = 'Location: ..\\';
$t2 = $t1 . $_SESSION['pagina']; 
header($t2)
?>