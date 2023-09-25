<?php 
require_once('Parametros.php');
$operar = new Parametros(18.5,3.3);
echo "<h2>Dado dos numeros...</h2>";
echo "El numero 1 que es : " .$operar->getCantidad1();
echo "<br>";
echo "El numero 2 que es : " .$operar->getCantidad2();
echo "<br>";
echo "La Suma de los numeros. Es igual a: ".$operar->getSuma();
echo "<br>";
echo "La Resta de los numeros. Es igual a: ".$operar->getResta();
echo "<br>";
echo "La Multiplicación de los numeros. Es igual a: ".$operar->getMultiplicacion();
echo "<br>";
echo "La Multiplicación de los numeros. Es igual a: ".$operar->getDivision();
echo "<br>";


    ?>