<?php 

function Autoload($class){

    $url = str_replace("\\","/",$class.".php");
    require_once($url);


}

//Llamar a la función autoload

spl_autoload_register('Autoload');



?>