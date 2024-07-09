<?php

$n = (int)readline();


$c = 0;
$r = 0;
$s = 0;

for ($i = 0; $i < $n; $i++) {
    $valores = explode(" ", readline());
    $qtd = $valores[0];
    $cobaia = $valores[1];


    if ($cobaia == 'C') {
        $c =  $c + $qtd;


    }elseif($cobaia == 'R'){
        $r = $r + $qtd;


    }elseif($cobaia == 'S'){
        $s = $s + $qtd;

    }


}
$total = $c + $r +$s;
echo "Total: $total cobaias" . PHP_EOL;
echo "Total de coelhos: $c" . PHP_EOL;
echo "Total de ratos: $r" . PHP_EOL;
echo "Total de sapos: $s" . PHP_EOL;
echo "Percentual de coelhos: " . number_format(($c / $total *100), 2, ".", "") . " %" . PHP_EOL;
echo "Percentual de ratos: " . number_format(($r / $total *100), 2, ".", "") . " %" . PHP_EOL;
echo "Percentual de sapos: " . number_format(($s / $total *100), 2, ".", "") . " %" . PHP_EOL;
