<?php

$valores = explode(" ", readline("digite 2 numeros: "));

$n1 = $valores[0];
$n2 = $valores[1];

if (($n1 % $n2 == 0) || ($n2 % $n1 == 0)) {
    echo "Sao multiplos";
}else{
    echo "Não são multiplos";
}