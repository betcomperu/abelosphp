<?php 
require_once('Autoload.php');
class Usuario extends Conexion{

    public $strNombre;
    public $intTelefono;
    public $strEmail;
    public $conexion;

    public function __construct()
    {
        $this->conexion = new Conexion();
    }
    


    public function insertUsuario(string $nombre, int $telefono, string $email )
    {

        $this->strNombre = $nombre;
        $this->intTelefono = $telefono;
        $this->strEmail = $email;


    }

}
