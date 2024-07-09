<?php
$valores = explode(" ", readline());
$hrinicial = $valores [0];
$hrfinal =  $valores [1];

if ($hrfinal > $hrinicial) {
    $duracao = $hrfinal - $hrinicial;
} else {
    $duracao = (24 - $hrinicial) + $hrfinal;
}

// Exibe a duração do jogo
echo "O JOGO DUROU " . $duracao . " HORA(S)\n";