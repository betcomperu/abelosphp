<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><table>
<?php 

require_once('ClassMueble.php');

$objCama = new Producto('Cama', 1200);
$infoProducto = $objCama->getInfoproducto();

print_r('<pre>');
print_r($infoProducto);
print_r('</pre>');

var_dump($infoProducto);



?>

</table>

</body>
</html>

