<?php 

function Autoload($class){

    require_once('$class'.".php");
}
spl_autoload_register("Autoload");

?>