<?php 

$arregloA = [ '1' => 'Lunes', '2' => 'Martes', '3' => 'Miercoles', '4' => 'Jueves', '5' => 'Viernes', '6' => 'Sabado', '7' => 'Domingo' ];

echo '============================';

echo $arregloA[ '2' ];


$cadenaNumeros1 = [ 1,2,3,4,5 ];
$cadenaNumeros2 = [ 6,7,8,9 ];

// Agrega un elemento al final
array_push( $cadenaNumeros2, 10 );

// Agrega un elemento al inicio
array_unshift($cadenaNumeros1, 0 );

//

$listaNumeros = array_merge($cadenaNumeros1, $cadenaNumeros2 );

foreach(  $arregloA as $arr => $key ){
    echo  '<p>' .  $key .  '  ' . $arr . '</p>' ;

}

foreach ($listaNumeros as $num  ) {
    echo  '<p>' .  $num .  '  '  . '</p>';
}

array_shift($cadenaNumeros1);

foreach ($listaNumeros as $num) {
    echo  '<p>' .  $num .  '  '  . '</p>';
}

$nuevosNumeros1 = array_slice( $cadenaNumeros2, 3, 3 );

$nuevosNumeros2 = array_splice($cadenaNumeros1, 1, 2);

foreach ($nuevosNumeros1 as $num) {
    echo  '<p>' .  $num .  '  '  . '</p>';
}

foreach ($nuevosNumeros2 as $num) {
    echo  '<p>' .  $num .  '  '  . '</p>';
}



echo  '<p>' .   '======================='  . '</p>' ;


$naturales = [ 3,7,8,9,3,4,5 ];


echo  '<p>' .   '=========================='  . '</p>';

foreach ($naturales as $n) {
    echo  '<p>' .  $n .  '  '  . '</p>';
}

sort( $naturales );

echo  '<p>' .   '========================='  . '</p>';

foreach ($naturales as $n) {
    echo  '<p>' .  $n .  '  '  . '</p>';
}

echo  '<p>' .   '****=========================****'  . '</p>';


asort( $arregloA );

foreach ($arregloA as $arr => $key) {
    echo  '<p>' .  $key .  '  ' . $arr . '</p>';
}


echo  '<p>' .   '======================='  . '</p>';

shuffle( $listaNumeros );

foreach ($listaNumeros as $arr ) {
    echo  '<p>' . $arr . '</p>';
}

echo  '<p>' .   '======================='  . '</p>';
?>