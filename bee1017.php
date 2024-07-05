<?php
function calcularCombustivel($tempo, $velocidade) {
    // Constante da eficiência do carro em km/L
    $eficiencia = 12.0;

    // Calcula a distância percorrida
    $distancia = $tempo * $velocidade;

    // Calcula os litros de combustível gastos
    $litrosGastos = $distancia / $eficiencia;

    // Retorna o resultado formatado com 3 casas decimais
    return number_format($litrosGastos, 3, '.', '');
}

// Lendo os dados de entrada
fscanf(STDIN, "%d", $tempo);
fscanf(STDIN, "%d", $velocidade);

// Calculando e mostrando o resultado
echo calcularCombustivel($tempo, $velocidade) . "\n";

