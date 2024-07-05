<?php

$linha1 = explode(" ", readline());

$x1 = (float)$linha1[0];
$y1 = (float)$linha1[1];

$linha2 = explode(" ", readline());

$x2 = (float)$linha2[0];
$y2 = (float)$linha2[1];

$distancia = sqrt(pow(($x2 - $x1), 2) + pow(($y2 - $y1), 2));

//sqrt = raiz quadrada
// pow = potenciação ao quadarado ao cubo...


echo number_format($distancia, 4, '.', '') . "\n";