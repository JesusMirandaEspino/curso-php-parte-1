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
$semana = [ 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo' ];


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

    $contador = 0;
    $valor1 = 0;
    $valor2 = 1;
    $temp = 0;  

echo  '   ' . $temp . ' ';

    $valora = 0;
    $valorb = 1;
    $temp1 = 0;
    $contadora = 0;

echo  '   ' . $temp1 . ' ';

    while( $contador < 25 ){

        $temp = $valor1 + $valor2;
        $valor1 = $valor2;
        $valor2 = $temp;

        echo $temp . ' ';

        $contador++;
    }



    do{
        $temp1 = $valora + $valorb;
        $valora = $valorb;
        $valorb = $temp1;

        echo $temp1 . ' ';

        $contadora++;
    }while( $contadora < 30 );


    for( $i = 0; $i < count( $semana ); $i++  ){
        echo '  ' . $semana[$i] . ' ';
    }

    foreach ( $semana as $dia  ) {
        echo '  ' . $dia . ' ';
    }

?>