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

    echo gettype($entero). '<br>'  ;


    //Operadores

    $a = 5;


    echo $a % 2 . '<br>'  ;
    echo $a ** 3 . '<br>'; 

    $a += 5;
    $a -= 5;
    $a /= 5;

    $c = 5;
    $b = "5";
    $d = 5;

    echo $c == $b;

    if($c == $b && $d == $a ){
        echo 'Son iguales';
    }else{
        echo 'Son diferentes';
    }

    if ($c === $b || $d === $a) {
        echo 'Son iguales.';
    } else {
        echo 'Son diferentes.';
    }

    if ($c != $b ) {
        echo 'Son iguales';
    } else {
        echo 'Son diferentes';
    }

    $c++;
    ++$d;

    $mensaje = 'Hola ';
    $mensaje .= 'Mundo';

    echo $mensaje;

    echo 1 <=> 1; //0
    echo 1 <=> 2; //-1
    echo 2 <=> 1; //1




    

?>


