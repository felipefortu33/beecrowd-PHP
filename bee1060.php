<?php
// Inicialize a contagem de valores positivos
$positivos = 0;

// Leia 6 valores do usuário
for ($i = 0; $i < 6; $i++) {
    $valor = floatval(trim(fgets(STDIN)));
    
    // Verifique se o valor é positivo
    if ($valor > 0) {
        $positivos++;
    }
}

// Imprima a quantidade de valores positivos
echo $positivos . " valores positivos\n";
?>
