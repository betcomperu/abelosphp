<?php 

require_once('ClassPersona.php');

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