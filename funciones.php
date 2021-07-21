<?php

    $nombre = 'Jesus';
    $mensaje = 'Hola a todos';
    


    function saludar($nombre){
        global $mensaje; //Mala practica
        echo '<h2> ' .  $mensaje . '  soy  ' .  $nombre  .' </h2>' . '</br>';
    }


    function areaRec( $num1, $num2 ){
        $num3 = $num1 * $num2;
        return $num3;
    }


    saludar('Mutuelo');

    echo areaRec( 5, 6 );

?>