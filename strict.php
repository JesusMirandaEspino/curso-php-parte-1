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


$input = <<< 'EOF'
1;Mutuelo;Mago
2;Ramo;Guerrero
EOF;

function personas($input){
    foreach( explode('\n', $input ) as $val ){
        $r = explode(';', $val );
        $id = array_shift($r);
        yield $id=>$r;
    }
}

foreach ( personas($input) as $va => $persona ) {
    echo $va . '</br>';
    echo $persona[0] . '</br>';
    echo $persona[1] . '</br>';
}

recorrer( 1,2,4,5,6,4,6,7,4 );

$gen = ( function (){
    yield 1;
    yield 2;
    return 3;
} );


foreach( $gen as $v){
    echo  '<p>' .  $v .  '</p>';
} 


?>