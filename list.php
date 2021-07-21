<?php   

    $salto = '</br>';

    $lista = ['1', '2', '3', '4', '5'];
    $numeros = [ 'uno' => '1',  'dos' => '2',  'tres' => '3',  'cuatro' => '4',  'cinco' => '5' ];
    $numeros2 = ['seis' => '6',  'siete' => '7',  'ocho' => '8',  'nueve' => '9',  'cero' => '0'];

    list( $uno, $dos, $tres, $cuatro, $cinco  ) = $lista;

    echo $uno . $salto;
    echo $dos . $salto;
    echo $tres . $salto;
    echo $cuatro . $salto;
    echo $cinco . $salto;

    print_r (array_values( $numeros ));

    echo  $salto;

    print_r(array_keys($numeros));

    echo  $salto;

    print_r(array_keys($numeros, '3'));

    echo  $salto;

    print_r(array_combine($numeros, $numeros2));

?>