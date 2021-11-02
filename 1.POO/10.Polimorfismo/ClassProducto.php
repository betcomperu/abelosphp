<?php 

class Producto {

public $strDescripcion;
public $fltPrecio;
protected $intStocMinimo = 10;
protected $strStatus = "Activo";

public function __construct(string $descripcion, float $precio)
{
    $this->strDescripcion = $descripcion;
    $this->fltPrecio = $precio;
}

public function getInfoproducto(){

   $arrayProducto = array('producto' => $this->strDescripcion ,
                            'precio' => $this->fltPrecio,
                            'stock_min'=>$this->intStocMinimo,
                            'estado'=>$this->strStatus );

    return $arrayProducto;

}
}


?>