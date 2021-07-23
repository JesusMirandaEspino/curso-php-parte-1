<?php

    $mensaje = 'hola';

    echo preg_replace_callback('~-([a-z])~', function($coincidencias ){
        return strtoupper($coincidencias);
    }, 'hola mundo'  );


    $saludo = function($nombre){
        echo $nombre;
    };

    $saludo('Jesus');


    $ejemplo = function() use ( $mensaje )  {
        echo $mensaje;
    };


    $ejemplo();

?>