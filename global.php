<?php

$nombre = 'Jesus';
$apellido = 'Miranda';
$saltar = '</br>';


function saludo( ){
    return $GLOBALS['nombre']  . '  ' . $GLOBALS['apellido'] . $GLOBALS['saltar'];
}


echo saludo();


echo $_SERVER['PHP_SELF'] . $saltar;
echo $_SERVER['SERVER_NAME'] . $saltar;
echo $_SERVER['HTTP_HOST'] . $saltar;
//echo $_SERVER['HTTP_REFERER'] . $saltar;
echo $_SERVER['SCRIPT_NAME'] . $saltar;
echo $_SERVER['HTTP_USER_AGENT'] . $saltar;

?>