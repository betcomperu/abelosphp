<?php 

require_once('ClassOperacion.php');

$objRaiz= new Calcular();

echo "La Raiz Cuadrada es: ". $objRaiz->raizCuadrada(1600);

echo "<br>";
$objPotencia= new Calcular();

echo "La Potencia es: ". $objPotencia->potencia(4,2);

echo "<br>";

$objPotencia= new Calcular();
echo "<h2>Dado dos numeros : 45 y 23 :</h2> <br>";
echo "La Operacion Suma es: ". $objPotencia->operando(45,23, "+");
echo "<br>";
echo "La Operacion Resta es: ". $objPotencia->operando(45,23, "-");
echo "<br>";
echo "La Operacion Multiplicacion es: ". $objPotencia->operando(45,23, "*");
echo "<br>";
echo "La Operacion División es: ". $objPotencia->operando(45,23, "/");
echo "<br>";
echo "La Operacion División es: ". $objPotencia->operando(45,23, "");



?>