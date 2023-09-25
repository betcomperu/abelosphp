<?php 

require_once ('operaciones.php');
require_once ('operacionesbasicas.php');


class Calcular implements Operacion, OperacionesBasicas{

    public $numero ;
    public $potencia;
    public $base;

   

  

    public function raizCuadrada(float $numero):float{

        $total = sqrt($numero);
        return $total;

    }

    public function potencia(int $base, int $potencia):int{

        $total = pow ($base, $potencia);
        return $total;

    }

    public function operando(float $num1, float $num2, string $operacion)
    {
        
        switch ($operacion) {
            case '+':
                $resultado = $num1 + $num2;
               
                break;
            
            case '-':
                $resultado = $num1 - $num2;
                
                break;
            case '*':
                $resultado = $num1 * $num2;
                
                break;
                
            case '/':
                $resultado = $num1 / $num2;
                
                break;
            
            default:
                echo "ingrese los numeros y la operación a realizar";
                break;
        }

        return $resultado;
    }
}



?>