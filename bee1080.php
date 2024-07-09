<?php

$maiorvalor = 0;


for ($i = 1; $i <= 100; $i++) {

    $valor = (int)readline();

    if ($valor > $maiorvalor) {
        $maiorvalor = $valor;
        $posicaomaior = $i;
    }
}
echo "$maiorvalor\n$posicaomaior\n";