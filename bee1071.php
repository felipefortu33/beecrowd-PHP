<?php

$x = (int)readline();
$y = (int)readline();

if ($x > $y){
    $maior = $x;
    $menor = $y;

}else{
    $maior = $y;
    $menor = $x;
}
$soma = 0;
for ($i = $menor + 1; $i < $maior; $i++) {
    if ($i % 2 !=0) {
        $soma = $soma + $i;
    }
}
echo $soma . PHP_EOL;