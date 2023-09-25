<?php 
namespace Modelos;
require_once('../Autoload.php');

class Persona{

public $intdpi;
public $strnombre;
public $intedad;

public function __construct(int $dpi, string $nombre, int $edad)
{
    $this->intdpi = $dpi;
    $this->strnombre = $nombre;
    $this->intedad = $edad;
}
public function getDatosPersonales(){

    $datos = "
        <h2>DATOS PERSONALES</h2>
        DPI : {$this->intdpi}<br>
        NOMBRE : {$this->strnombre}<br>
        EDAD : {$this->intedad}<br>
    
    ";
    return $datos;


}


}
