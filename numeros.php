<?php

$num1 = 12345678;
$num2 = -12345678;
$num3 = 01234567; //octal
$num4 = 0xFFAADD; //hexadecimal
$num5 = 0b1010011; //binario


$a = 1.234;
$b = 1.2e3;
$c = 7E-10;
$d = 1.23456789;
$e = 1.2345678901;
$epsilon = 0.00001;

if( abs( $d-$e )<$epsilon ){
    echo 'Son iguales';
}else{
    echo 'Son diferentes';
}

?>