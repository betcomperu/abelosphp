<?php 

require_once ("ClassOperacion.php"); // Cargo la Clase primero

echo "<h2>Siendo los dos numeros 4 y 5</h2>";
##### INSTANCIO #######
$operaciones1 = new Operacion(4, 5); // Instancio el Objeto "suma" con la Clase Operaciones1
######################
# al instanciar la Clase ClassOperacion cargo todo los metodos que tiene dentro
# Esta clase tiene los metodos para sumar restar multiplicar y dividir
#####################
$sumar = $operaciones1->getSuma(); // Guardo el resultado del metodo en la variable $sumar
echo "El resultado de la suma de los dos numeros es : ". $sumar; // Pinto la variable resultante

echo "</br>"; 


$restando = $operaciones1->getResta(); // Guardo el resultado del metodo en la variable $restando
echo "El resultado de la resta de los dos numeros es : ". $restando; // Pinto la variable resultante

echo "</br>"; 


$multiplicando = $operaciones1->getMultiplicacion(); // Guardo el resultado del metodo en la variable $multiplicando
echo "El resultado de la multiplicación de los dos numeros es : ". $multiplicando; // Pinto la variable resultante

echo "</br>"; 


$dividiendo = $operaciones1->getDivision(); // Guardo el resultado del metodo en la variable $dividiendo
echo "El resultado de la división de los dos numeros es : ". $dividiendo; // Pinto la variable resultante

echo "<h2>Siendo los dos numeros 150 y 45</h2>";

$operaciones2 = new Operacion(150, 45); // Instancio el Objeto "suma" con la Clase Operaciones2

$sumar = $operaciones2->getSuma(); // Guardo el resultado del metodo en la variable $sumar
echo "El resultado de la suma de los dos numeros es : ". $sumar; // Pinto la variable resultante

echo "</br>"; 

$restando = $operaciones2->getResta(); // Guardo el resultado del metodo en la variable $restando
echo "El resultado de la resta de los dos numeros es : ". $restando; // Pinto la variable resultante

echo "</br>"; 

$multiplicando = $operaciones2->getMultiplicacion(); // Guardo el resultado del metodo en la variable $multiplicando
echo "El resultado de la multiplicación de los dos numeros es : ". $multiplicando; // Pinto la variable resultante

echo "</br>"; 

$dividiendo = $operaciones2->getDivision(); // Guardo el resultado del metodo en la variable $dividiendo
echo "El resultado de la división de los dos numeros es : ". $dividiendo; // Pinto la variable resultante

?>