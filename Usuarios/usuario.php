<?php 

require('ClassUsuario.php');
const salto = "<br>";

$objetousuario1=new Usuario("Betito", "albetho@hotmail.com", "Admin");

//echo $objetousuario1->nombre;



echo Usuario::$estado.salto; // Trayendo una variable Estatic




echo $objetousuario1->getNombre(); // Trayendo con una funcion una variable privada

?>