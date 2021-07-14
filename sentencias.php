<?php

$entrada = 3;
$edad = 16;
$edad2 = 24;
$casado = true;
$a = 5;
$b = 10;
$total = 123456;
$tipocambio = 19.45;
$grantotal = ($tipocambio > 0 ) ? $total * $tipocambio :  $total;

    if( $edad < 18 ){
        echo 'Eres menor de edad';
    }else{
        echo 'Eres mayor de edad';
    }


    if ($edad2 > 18  && $casado ) {
        echo 'Disfruta de nuestros tours';
    } else {
        echo 'No es candidato';
    }

    if( $a < $b ): echo 'Es mayor';
    else : echo 'Es menor' ;
    endif;

    switch($entrada){

    case 1: echo 'Valor de entrada 1';
        break;
    case 2:
        echo 'Valor de entrada 2';
        break;
    case 3:
        echo 'Valor de entrada 3';
        break;

        default: break;
    }



?>