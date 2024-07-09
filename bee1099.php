<?php

// Função para calcular a soma dos números ímpares entre X e Y, inclusive
function somaImparesEntre($X, $Y) {
    $soma = 0;
    // Garantir que X seja menor ou igual a Y
    if ($X > $Y) {
        $temp = $X;
        $X = $Y;
        $Y = $temp;
    }
    // Iterar de X+1 até Y-1 e somar os ímpares
    for ($i = $X + 1; $i < $Y; $i++) {
        if ($i % 2 != 0) {
            $soma += $i;
        }
    }
    return $soma;
}

// Lê a quantidade de casos de teste
$N = intval(trim(fgets(STDIN)));

$resultados = [];

// Itera sobre cada caso de teste
for ($i = 0; $i < $N; $i++) {
    // Lê os valores de X e Y
    list($X, $Y) = array_map('intval', explode(' ', trim(fgets(STDIN))));
    
    // Calcula a soma dos ímpares entre X e Y e armazena no array de resultados
    $resultado = somaImparesEntre($X, $Y);
    $resultados[] = $resultado;
}

// Imprime todos os resultados ao final, um por linha
foreach ($resultados as $resultado) {
    echo $resultado . "\n";
}
?>
