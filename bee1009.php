<?php

$nome = readline();

$salariofx = (float)readline();
$totaldevendas = (float)readline();
$comisao = $totaldevendas * (15 / 100);
$total = $comisao + $salariofx;


echo"TOTAL = R$ " . number_format($total, 2, ".", "") . PHP_EOL;

//link do problema no beecrowd https://judge.beecrowd.com/pt/problems/view/1009