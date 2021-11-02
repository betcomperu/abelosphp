<?php 
// Creando un Empleado
require_once("ClassEmpleado.php");
require_once("ClassCliente.php");

$objEmpleado = new Empleado(19797782," Alberto Chavez",50);
$objEmpleado->setAsignarPuesto("Administrador");

echo $objEmpleado->getDatosPersonales();
echo "Puesto :{$objEmpleado->getPuesto()}";


$objCliente = new Cliente(29606252," Juan Torres",59);
$objCliente->setCredito(4520);

echo $objCliente->getDatosPersonales();
echo "Crédito :{$objCliente->getCredito()}";




?>