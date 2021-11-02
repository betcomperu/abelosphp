<?php 

require_once ("ClassProducto.php");

class Mueble extends Producto{

    public $strColor;
    public $strMaterial;
    public $strStatus = "Agotado";

    public function __construct(string $descripcion, float $precio, string $color, string $material)
    {
        parent::__construct($descripcion, $precio);
        $this->strMaterial = $material;
        $this->strColor = $color;
    }

    public function getInfoproducto()
    {
        $arrayProducto = array('producto' => $this->strDescripcion ,
                                'precio' => $this->fltPrecio,
                                'stock_min'=>$this->intStocMinimo,
                                'estado'=>$this->strStatus,
                                'color'=>$this->strColor,
                                'Material'=>$this->strMaterial );

        return $arrayProducto;
    }

}


?>