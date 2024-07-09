<?php
function decomporValor($valor) {
    // Define as notas e moedas disponíveis
    $notas = [100, 50, 20, 10, 5, 2];
    $moedas = [1, 0.50, 0.25, 0.10, 0.05, 0.01];
    
    // Conversão do valor para centavos para evitar problemas de precisão com float
    $valorCentavos = round($valor * 100);

    // Processando notas
    echo "NOTAS:\n";
    foreach ($notas as $nota) {
        $quantidadeNotas = floor($valorCentavos / ($nota * 100));
        $valorCentavos -= $quantidadeNotas * $nota * 100;
        echo $quantidadeNotas . " nota(s) de R$ " . number_format($nota, 2, '.', '') . "\n";
    }

    // Processando moedas
    echo "MOEDAS:\n";
    foreach ($moedas as $moeda) {
        $quantidadeMoedas = floor($valorCentavos / ($moeda * 100));
        $valorCentavos -= $quantidadeMoedas * $moeda * 100;
        echo $quantidadeMoedas . " moeda(s) de R$ " . number_format($moeda, 2, '.', '') . "\n";
    }
}

// Lendo o dado de entrada
fscanf(STDIN, "%f", $valor);

// Decompondo o valor e mostrando o resultado
decomporValor($valor);
?>
