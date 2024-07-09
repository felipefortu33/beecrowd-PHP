<?php

$valor = (float)readline("Digite o valor: ");

if ($valor >= 0 && $valor <= 25) {
    echo "Intervalo [0,25]";
}else if ($valor > 25 && $valor <= 50) {
    echo "Intervalo [25,50]";
}elseif ($valor > 50 && $valor <= 75) {
    echo "Intervalo [50,75]";
}elseif ($valor > 75 && $valor <= 100) {
    echo "Intervalo [75,100]";
}else{
    echo "Fora de intervalo";
}