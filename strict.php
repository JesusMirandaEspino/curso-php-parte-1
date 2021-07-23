<?php 


function suma( int $num1, int $num2  ):int {
    return $num1 + $num2;
}


function recorrer( ...$numeros ){
    foreach ($numeros as $num){
        echo  '<p>' .  $num .  '  '  . '</p>';
    }
}

function rango( $inicio, $fin, $incremento )
{
    for( $i = $inicio; $i < $fin; $i += $incremento  ){
        yield $i;
    }
    
}



foreach ( range(1,15) as $valor ){
    echo $valor . '</br>';
}

foreach (rango(1, 50, 2) as $valor) {
    echo $valor . '</br>';
}

try{
    var_dump( suma( 2,4 ) );
}catch( TypeError $e ){
    echo $e->getMessage();
}

recorrer( 1,2,4,5,6,4,6,7,4 );


?>