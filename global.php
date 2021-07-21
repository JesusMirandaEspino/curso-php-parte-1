<?php

$nombre = 'Jesus';
$apellido = 'Miranda';


function saludo(){
    return $GLOBALS['nombre']  . '  ' . $GLOBALS['apellido'];
}


echo saludo();

?>