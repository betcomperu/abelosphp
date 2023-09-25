<?php 

namespace Controladores;
//require_once('../modelos/Persona.php');
use Modelos\Persona;
//require_once('../Autoload.php');

class Cliente extends Persona{

protected  $intcredito;

public function __construct(int $dpi,string $nombre, int $edad)
{
    parent::__construct($dpi, $nombre, $edad);
    
}

public function setCredito(int $credito){

    $this->intcredito = $credito;
}

public function getCredito():int{

return $this->intcredito;
}


}



?>