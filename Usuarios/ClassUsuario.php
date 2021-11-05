<?php

####
## ASTRACCIÓN Y ENCAPSULACION
###
class Usuario
{

  private $nombre;
  public $email;
  public $tipo;
  private $clave;
  protected $fechanac;
  static $estado = "activo";

  // Metodos

  function __construct(string $nombre, string $email, string $tipo)
  {
    $this->nombre = $nombre;
    $this->email = $email;
    $this->tipo = $tipo;
    $this->clave = rand();
  }
  public function getNombre()
  {
    return $this->nombre;
  }
  public function getEmail(){
    return $this->email;
}
}



?> 

