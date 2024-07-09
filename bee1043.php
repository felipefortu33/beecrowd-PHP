<?php
function calcularTrianguloOuTrapezio($A, $B, $C) {
    // Verifica se forma um triângulo
    if ($A + $B > $C && $A + $C > $B && $B + $C > $A) {
        // Calcula o perímetro do triângulo
        $perimetro = $A + $B + $C;
        printf("Perimetro = %.1f\n", $perimetro);
    } else {
        // Calcula a área do trapézio
        $area = ($A + $B) * $C / 2.0;
        printf("Area = %.1f\n", $area);
    }
}

// Lendo os valores de entrada
fscanf(STDIN, "%f %f %f", $A, $B, $C);

// Chamando a função para calcular e mostrar o resultado
calcularTrianguloOuTrapezio($A, $B, $C);
?>
