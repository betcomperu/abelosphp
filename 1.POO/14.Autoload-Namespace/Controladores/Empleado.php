<?php 

namespace Controladores;

//require_once("../modelos/Persona.php");
use Modelos\Persona;
require_once('../Autoload.php');

class Empleado extends Persona{

protected $strpuesto;

public function __construct(int $dpi, string $nombre, int $edad)
{
    parent::__construct($dpi, $nombre, $edad);
    
}

public function setAsignarPuesto(string $puesto){

    $this->strpuesto = $puesto;
}

public function getPuesto():string{

return $this->strpuesto;
}


}



?>