<?php
// Leitura do valor inteiro X
$X = intval(trim(fgets(STDIN)));

// Verificação se o número é par ou ímpar e ajuste inicial, se necessário
if ($X % 2 == 0) {
    $X += 1;
}

// Imprimir os 6 valores ímpares consecutivos
for ($i = 0; $i < 6; $i++) {
    echo $X + ($i * 2) . PHP_EOL;
}
?>
