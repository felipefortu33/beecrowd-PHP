<?php

// Lê o valor de N
$N = (int)readline();

// Loop para cada caso de teste
for ($i = 0; $i < $N; $i++) {
    // Lê os três valores separados por espaço
    $valores = explode(" ", readline());
    
    // Converte os valores para float
    $V1 = (float)$valores[0];
    $V2 = (float)$valores[1];
    $V3 = (float)$valores[2];

    // Pesos
    $p1 = 2;
    $p2 = 3;
    $p3 = 5;

    // Cálculo da média ponderada
    $media = (($V1 * $p1) + ($V2 * $p2) + ($V3 * $p3)) / ($p1 + $p2 + $p3);

    // Exibe a média com uma casa decimal
    echo number_format($media, 1, '.', '') . "\n";
}
?>
