<?php

$notas = readline();

while ($notas < 0.0 || $notas > 10.00) {
    echo "nota invalida\n";
    $notas = readline();
}
$n1 = $notas;

$notas = readline();

while ($notas < 0.0 || $notas > 10.00) {
    echo "nota invalida\n";
    $notas = readline();

    $n2 = $notas;
    $media = ($n1 + $n2) / 2;
    echo "media = " . number_format($media, 2, ".", "") . PHP_EOL;

    $novo = 0;

    echo "novo calculo (1-sim 2-nao)";

    if ($novo != 1 && $novo != 2) {
        $novo = readline();
    } else {
        $notas = readline();
    }

}