<?php
function calcularBhaskara($A, $B, $C) {
    if ($A == 0) {
        echo "Impossivel calcular\n";
        return;
    }

    $delta = $B * $B - 4 * $A * $C;

    if ($delta < 0) {
        echo "Impossivel calcular\n";
        return;
    }

    $R1 = (-$B + sqrt($delta)) / (2 * $A);
    $R2 = (-$B - sqrt($delta)) / (2 * $A);

    echo"R1 = " . number_format($R1, 5, ".", "") . PHP_EOL;
    echo"R2 = " . number_format($R2, 5, ".", "") . PHP_EOL;

}

// entrada
fscanf(STDIN, "%f %f %f", $A, $B, $C);

// Calculando e mostrando o resultado
calcularBhaskara($A, $B, $C);
