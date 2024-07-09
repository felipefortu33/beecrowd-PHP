<?php
$valores = explode(" ", readline());
$horaInicial = intval($valores[0]);
$minutoInicial = intval($valores[1]);
$horaFinal =  intval($valores[2]);
$minutoFinal =  intval($valores[3]);

// Convertendo tudo para minutos desde o início do dia
$inicioMinutos = $horaInicial * 60 + $minutoInicial;
$fimMinutos = $horaFinal * 60 + $minutoFinal;

// Calculando a duração em minutos
if ($fimMinutos > $inicioMinutos) {
    $duracaoMinutos = $fimMinutos - $inicioMinutos;
} else {
    $duracaoMinutos = (24 * 60 - $inicioMinutos) + $fimMinutos;
}

// Calculando horas e minutos da duração
$duracaoHoras = floor($duracaoMinutos / 60);
$duracaoMinutos = $duracaoMinutos % 60;

// Exibindo a duração do jogo
echo "O JOGO DUROU " . $duracaoHoras . " HORA(S) E " . $duracaoMinutos . " MINUTO(S)" . PHP_EOL;
?>
