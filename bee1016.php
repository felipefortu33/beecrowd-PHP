<?php

// Leitura da distância em quilômetros
$distancia = intval(trim(fgets(STDIN)));

// Cálculo do tempo necessário em minutos
$tempo = $distancia * 2;

// Impressão do resultado
echo "$tempo minutos\n";



