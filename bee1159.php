<?php

$x = (int)readline();

$soma = 0;

while ($x != 0) {
    if ($x % 2 != 0) {
        $x++;
}
$cont = 1;
$soma = 0;

while ($cont <= 5) {

    $soma = $soma + $x;
    //$x = $x + 2;
    $x += 2;
    $cont++;
}
echo $soma . PHP_EOL;
$x = (int)readline();
}