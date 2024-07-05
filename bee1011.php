<?php
// Função para calcular o volume da esfera
function calcularVolume($raio) {
    $pi = 3.14159;
    $volume = (4/3.0) * $pi * pow($raio, 3);
    return $volume;
}

// Leitura do raio da entrada
$raio = (float) fgets(STDIN);

// Chamada da função para calcular o volume
$volume = calcularVolume($raio);

// Saída formatada com 3 casas decimais
echo "VOLUME = " . number_format($volume, 3, '.', '') . "\n";