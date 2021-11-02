<?php 

require_once("ClassPersona.php");

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