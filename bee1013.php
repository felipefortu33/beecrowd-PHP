<?php

$valor = explode(" ", readline());

$a = (float)$valor[0];
$b = (float)$valor[1];
$c = (float)$valor[2];

$maior_ab = ($a + $b + abs($a - $b)) / 2;

$maior = ($maior_ab + $c + abs($maior_ab - $c)) / 2;

//abs retorna valor absoluto

echo $maior . " eh o maior\n";



