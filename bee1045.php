<?php

$valores = explode(" ", readline());
//essa função subistitui toda a função abaixo
rsort($valores);
$a = $valores[0];
$b = $valores[1];
$c = $valores[2];

//no caso essa 
// $n1 = $valores[0];
// $n2 = $valores[1];
// $n3 = $valores[2];

// if ($n1 > $n2 && $n1 > $n3) {
//     $maior = $n1;
//     $meio = $n2;
//     $menor = $n3;

// } else if ($n2 > $n1 && $n2 > $n3) {
//     $maior = $n2;
//     $meio = $n3;
//     $menor = $n1;
// } else {
//     $maior = $n3;
//     $meio = $n2;
//     $menor = $n1;
// }

// $a = $maior;
// $b = $meio;
// $c = $menor;

if ($a >= $b + $c) {
    echo "NAO FORMA TRIANGULO" . PHP_EOL;

} else {

    if (pow($a, 2) == pow($b, 2) + pow($c, 2)) {
        echo "TRIANGULO RETANGULO" . PHP_EOL;
    } else if (pow($a, 2) > pow($b, 2) + pow($c, 2)) {
        echo "TRIANGULO OBTUSANGULO" . PHP_EOL;
    } else if (pow($a, 2) < pow($b, 2) + pow($c, 2)) {
        echo "TRIANGULO ACUTANGULO" . PHP_EOL;
    }

    if ($a == $b && $a == $c && $b == $c && $b == $a) {
        echo "TRIANGULO EQUILATERO" . PHP_EOL;
    } else if (($a == $b && $a != $c) || ($b == $c && $b != $a) || ($a == $c && $a != $b)) {
        echo "TRIANGULO ISOSCELES" . PHP_EOL;

    }
}