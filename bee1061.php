<?php
// Leia o dia de início
$dia_inicio = intval(explode(" ", trim(fgets(STDIN)))[1]);
// Leia o tempo de início
list($hora_inicio, $minuto_inicio, $segundo_inicio) = array_map('intval', explode(" : ", trim(fgets(STDIN))));

// Leia o dia de término
$dia_termino = intval(explode(" ", trim(fgets(STDIN)))[1]);
// Leia o tempo de término
list($hora_termino, $minuto_termino, $segundo_termino) = array_map('intval', explode(" : ", trim(fgets(STDIN))));

// Calcule a duração em segundos
$duracao_segundos = ($dia_termino - $dia_inicio) * 24 * 60 * 60
                  + ($hora_termino - $hora_inicio) * 60 * 60
                  + ($minuto_termino - $minuto_inicio) * 60
                  + ($segundo_termino - $segundo_inicio);

// Calcule a duração em dias, horas, minutos e segundos
$dias = intval($duracao_segundos / (24 * 60 * 60));
$duracao_segundos %= 24 * 60 * 60;
$horas = intval($duracao_segundos / (60 * 60));
$duracao_segundos %= 60 * 60;
$minutos = intval($duracao_segundos / 60);
$segundos = $duracao_segundos % 60;

// Imprima a duração
echo $dias . " dia(s)\n";
echo $horas . " hora(s)\n";
echo $minutos . " minuto(s)\n";
echo $segundos . " segundo(s)\n";
?>
