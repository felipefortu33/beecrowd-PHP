<?php

$a = readline();
$b = readline();
$c = readline();

$peso1 = 2;
$peso2 = 3;
$peso3 = 5;

$MEDIA = (($a * $peso1) + ($b * $peso2) + ($c * $peso3)) / ($peso1 + $peso2 + $peso3);

echo"MEDIA = " . number_format($MEDIA, 1, ".", "") . PHP_EOL;

//link do problema no beecrowd https://judge.beecrowd.com/pt/problems/view/1006