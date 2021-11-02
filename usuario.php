<?php 

require('ClassUsuario.php');

$objetousuario1=new Usuario("Betito", "albetho@hotmail.com", "Admin");

//echo $objetousuario1->nombre;

echo "<br>";

echo Usuario::$estado; // Trayendo una variable Estatic

echo "<br>";

echo $objetousuario1->getNombre(); // Trayendo con una funcion una variable privada

?>