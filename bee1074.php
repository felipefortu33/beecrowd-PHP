<?php

$n = (int) readline();

// Loop para verificar e imprimir a mensagem para cada valor lido
for ($i = 0; $i < $n; $i++) {
    // Leitura do valor inteiro X
    $X = intval(trim(fgets(STDIN)));

    // Verificação e impressão da mensagem correspondente
    if ($X == 0) {
        echo "NULL\n";
    } elseif ($X % 2 == 0) {
        echo "EVEN ";
    } else {
        echo "ODD ";
    }

    if ($X > 0) {
        echo "POSITIVE\n";
    } elseif ($X < 0) {
        echo "NEGATIVE\n";
    }
}