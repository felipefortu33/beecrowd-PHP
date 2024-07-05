<?php
function converterIdade($dias) {
    // Calcula os anos
    $anos = floor($dias / 365);
    // Calcula os dias restantes após a contagem dos anos
    $diasRestantes = $dias % 365;
    // Calcula os meses restantes após a contagem dos anos
    $meses = floor($diasRestantes / 30);
    // Calcula os dias restantes após a contagem dos meses
    $diasRestantes = $diasRestantes % 30;

    // Imprime o resultado no formato requerido
    echo $anos . " ano(s)\n";
    echo $meses . " mes(es)\n";
    echo $diasRestantes . " dia(s)\n";
}

// Lendo o dado de entrada
fscanf(STDIN, "%d", $dias);

// Convertendo e mostrando o resultado
converterIdade($dias);
?>
