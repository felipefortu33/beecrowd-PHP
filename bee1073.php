<?php

$n = (int)readline();

for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 0) { // Verifica se o número é par
        $quadrado = $i * $i; // Calcula o quadrado
        echo "$i^2 = $quadrado\n"; // Imprime o quadrado
    }
}
