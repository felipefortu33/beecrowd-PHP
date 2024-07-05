<?php

$linha1 = explode(" ", readline());

$a = (float)$linha1[0];
$b = (float)$linha1[1];
$c = (float)$linha1[2];

$pi = 3.14159;
//area do triangulo
$triangulo = $a * $c / 2;
// circulo
$circulo = $c * $c * $pi;
//trapezio
$trapezio = (($a + $b) * $c / 2);
//quadrado
$quadrado = pow($b,2);
//retangulo
$retangulo = $a * $b;

echo "TRIANGULO: " . number_format($triangulo, 3, '.', '') . "\n";
echo "CIRCULO: " . number_format($circulo, 3, '.', '') . "\n";
echo "TRAPEZIO: " . number_format($trapezio, 3, '.', '') . "\n";
echo "QUADRADO: " . number_format($quadrado, 3, '.', '') . "\n";
echo "RETANGULO: " . number_format($retangulo, 3, '.', '') . "\n";
