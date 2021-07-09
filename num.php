<?php

    


    $variable = 'hola';
     // su valor puede cambiar
    define( 'IVA', 17 );


    //valores unicode

    echo "\u{10084}";

    //datos compuestos

    $arreglo = [ 'lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado' ];


    $division = 10 / 3;

    echo $division . '<br>';
    echo  '   ';
    echo (integer) $division . '<br>';
    $entero =  (int) $division;  

    var_dump( $division );
    echo '<br>';
    var_dump($entero);
    echo '<br>';

    echo gettype($entero);

?>