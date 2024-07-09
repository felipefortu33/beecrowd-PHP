<?php
$qtd = 0;
$soma = 0;
$idade = (int)readline();

while ($idade >= 0) {
    $qtd++;
    $soma = $soma + $idade;
    $idade = (int)readline();
    # code...
}
$media = $soma / $qtd;

echo number_format($media, 2, ".", "") ."\n";