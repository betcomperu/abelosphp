<?php 
require_once ('ClassTienda.php');

$objProducto = new Tienda();

$objProducto->setProducto('Monitor', 2300, 10);

echo $objProducto->getProducto()."<br>";

$objProducto->setCarrito("Monitor", 3); // Compra 1
$objProducto->setStock(3);

$objProducto->setCarrito("Monitor", 1); // Compra 2
$objProducto->setStock(1);

$objProducto->setCarrito("Monitor", 4); // Compra 3
$objProducto->setStock(4);

echo $objProducto->getProducto()."<br>";



echo $objProducto->getCarrito();


?>