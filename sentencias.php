<?php

$edad = 16;
$edad2 = 24;
$casado = true;
$a = 5;
$b = 10;

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




?>