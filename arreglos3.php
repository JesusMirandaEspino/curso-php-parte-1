<?php

$continente = [ 
    array(
        'Mexico', 'Canada'
    ),
    array(
        'japon', 'corea del sur'
    ),array(
        'suiza', 'dimanarca'
    )  
];


for( $i = 0; $i < count( $continente ); $i++ ){
    for($j = 0; $j < count($continente[$i]); $j++  ){
        echo $continente[$i][$j] . '  ' ;
    }
}


//Arreglos globales


?>