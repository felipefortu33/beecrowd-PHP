<?php
// Leia o salário do usuário
$salario = floatval(trim(fgets(STDIN)));

// Calcule o imposto devido
$imposto = 0.0;
if ($salario > 4500.00) {
    $imposto += ($salario - 4500.00) * 0.28;
    $salario = 4500.00;
}
if ($salario > 3000.00) {
    $imposto += ($salario - 3000.00) * 0.18;
    $salario = 3000.00;
}
if ($salario > 2000.00) {
    $imposto += ($salario - 2000.00) * 0.08;
}

// Imprima o resultado
if ($imposto == 0.0) {
    echo "Isento\n";
} else {
    echo "R$ " . number_format($imposto, 2, '.', '') . "\n";
}
?>
