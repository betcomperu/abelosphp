<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>CICLO FOR</h1>
<?php 

for ($i=2010; $i<2050 ; $i=$i+2)
{ 
    echo "Este año es Bisiestro: "."<b>$i</b>"."<br>";
}
?>

<?php 

echo "Este es la ruta del archivo que esta corriendo : ".(__FILE__);
echo "<br>";
echo "Este es la Linea de codigo del archivo que esta corriendo : ".(__LINE__);
echo "<br>";
echo "Este es la ruta del Directorio ubicado el archivo php : ".(__DIR__);
echo "<br>";
echo "Este es la ruta del Directorio ubicado el archivo php : ".(__CLASS__);
?>



</body>
</html>

