<?php 
// Implementamos el Autoload
require_once("../Controladores/Empleado.php");
require_once("../Controladores/Cliente.php");
use Controladores\Empleado;
use Controladores\Cliente;

require_once('../Autoload.php');

$objEmpleado = new Empleado(19797782," Alberto Chavez",50);
$objEmpleado->setAsignarPuesto("Administrador");

echo $objEmpleado->getDatosPersonales();
echo "Puesto :{$objEmpleado->getPuesto()}";


$objCliente = new Cliente(29606252," Juan Torres",59);
$objCliente->setCredito(4520);

echo $objCliente->getDatosPersonales();
echo "Crédito :{$objCliente->getCredito()}";




?>