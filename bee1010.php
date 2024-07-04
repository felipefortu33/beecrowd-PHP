<?php



$linha1 = explode(" ", readline());
$linha2 = explode(" ", readline());

$cod1 = (int)$linha1[0];
$qtd1 = (int)$linha1[1];
$vlr1 = (float)$linha1[2];

$total1 = (float)($qtd1 * $vlr1);

$cod2 = (int)$linha2[0];
$qtd2 = (int)$linha2[1];
$vlr2 = (float)$linha2[2];

$total2 = (float)($qtd2 * $vlr2);

$total_pagar = $total1 + $total2;

echo "VALOR A PAGAR: R$ " . number_format($total_pagar, 2, ".", "") . PHP_EOL;

//link do problema no beecrowd https://judge.beecrowd.com/pt/problems/view/1010