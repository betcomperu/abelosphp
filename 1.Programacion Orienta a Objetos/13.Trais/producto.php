<?php 

/**
 * 
 */
trait Producto
{
    public $strProducto;
    public $fltPrecio;
    public $intStock;

    public function setProducto(string $producto, float $precio, int $stock) // Crea un producto
    {
        $this->strProducto = $producto;
        $this->fltPrecio = $precio;
        $this->intStock = $stock;
    }

    public function getProducto() // Muestra un producto
    {
        $strInfo = "
        Producto = {$this->strProducto} <br>
        Precio = {$this->fltPrecio}<br>
        Stock = {$this->intStock}<br><br>
        ";
        return $strInfo;
    }

    public function setStock(int $cantidad){

        $this->intStock = $this->intStock - $cantidad;
    }
}


?>