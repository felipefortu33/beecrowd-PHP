<?php
function converterTempo($segundos) {
    // Calcula as horas
    $horas = floor($segundos / 3600);
    // Calcula os minutos
    $minutos = floor(($segundos % 3600) / 60);
    // Calcula os segundos restantes
    $segundosRestantes = $segundos % 60;

    // Retorna o resultado no formato horas:minutos:segundos
    return sprintf("%d:%d:%d", $horas, $minutos, $segundosRestantes);
}

// Lendo o dado de entrada
fscanf(STDIN, "%d", $segundos);

// Convertendo e mostrando o resultado
echo converterTempo($segundos) . "\n";
?>
