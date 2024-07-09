<?php
// Inicialize a contagem de valores positivos e a soma de valores positivos
$positivos = 0;
$soma = 0.0;

// Leia 6 valores do usuário
for ($i = 0; $i < 6; $i++) {
    $valor = floatval(trim(fgets(STDIN)));
    
    // Verifique se o valor é positivo
    if ($valor > 0) {
        $positivos++;
        $soma += $valor;
    }
}

// Calcule a média dos valores positivos
$media = $soma / $positivos;

// Imprima a quantidade de valores positivos e a média
echo $positivos . " valores positivos\n";
echo number_format($media, 1, '.', '') . "\n";
?>