<?php

$n = (int)readline();

for ($i = 1; $i <= 10000; $i++) {
    if ($i % $n == 2) { // Verifica se o resto da divisão por N é igual a 2
        echo "$i\n"; // Imprime o número que satisfaz a condição
    }
}