<?php

// Lê o número de pares de valores inteiros
$N = (int)readline();

// Inicializa um array para armazenar os resultados
$resultados = [];

for ($i = 0; $i < $N; $i++) {
    // Lê os valores de X e Y para cada par
    $valores = explode(" ", readline());
    $X = (int)$valores[0];
    $Y = (int)$valores[1];

    if ($Y == 0) {
        $resultados[] = "divisao impossivel";
    } else {
        $resultado = $X / $Y;
        $resultados[] = number_format($resultado, 1, '.', '');
    }
}

// Exibe todos os resultados
foreach ($resultados as $resultado) {
    echo $resultado . "\n";
}
?>
