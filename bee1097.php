<?php

// Loop para variar o valor de I de 1 a 9
for ($i = 1; $i <= 9; $i += 2) {
    // Determina o valor inicial de J com base em I
    $inicio_j = $i + 6;
    // Determina o valor final de J com base em I
    $fim_j = $i + 4;

    // Loop para variar o valor de J de acordo com I
    for ($j = $inicio_j; $j >= $fim_j; $j--) {
        // Impressão da sequência no formato especificado
        echo "I=$i J=$j\n";
    }
}








