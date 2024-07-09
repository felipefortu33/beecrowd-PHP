<?php



// Leitura dos valores
fscanf(STDIN, "%d %d %d", $a, $b, $c);

// Ordenação dos valores
$min = min($a, $b, $c);
$max = max($a, $b, $c);
$meio = ($a + $b + $c) - $min - $max;

// Impressão dos valores ordenados
echo "$min\n$meio\n$max\n\n";

// Impressão dos valores na sequência original
echo "$a\n$b\n$c\n";




