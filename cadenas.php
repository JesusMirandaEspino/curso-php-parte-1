<?php

//TODO tipos de datos
#cadenas


$cadena = "Hola desde php";
$nombre = 'Jesus';


echo <<<EOD
hola mi nombres es: $nombre
EOD;


echo <<<'EOD'
hola mi nombres es: $nombre
EOD;


echo $cadena;


$texto1 = 'Este es un texto';
$texto2 = 'Este es otro texto';
$salida = $texto1 . ' ';
$salida .= $texto2;
echo  $texto1 . ' ' . $texto2;
echo $salida;


?>