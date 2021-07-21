<?php

    $nombre = 'Jesus';
    $mensaje = 'Hola a todos';



    function saludar($nombre){
        global $mensaje; //Mala practica
        echo '<h2> ' .  $mensaje . '  soy  ' .  $nombre  .' </h2>' . '</br>';
    }

    function saludos( &$nom)
    {
        $nom .= ', saluda a todos';
        echo $nom . '</br>';
    }


    function areaRec( $num1, $num2 = 5 ){
        $num3 = $num1 * $num2;
        return $num3;
    }

$nom = 'Mutuelo';
    saludos( $nom );

    saludar('Mutuelo');

    echo areaRec( 5, 6 );

?>