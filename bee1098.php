<?php

$I = 0.0;
while ($I <= 2.0) {
    for ($j = 1; $j <= 3; $j++) {
        $J = $j + $I;
        echo "I=" . number_format($I, 1) . " J=" . number_format($J, 1) . "\n";
    }
    $I += 0.2;
}

// Ajustar o último conjunto de valores para I=2
$I = 2.0;
for ($j = 1; $j <= 3; $j++) {
    $J = $j + $I;
    echo "I=" . number_format($I, 1) . " J=" . number_format($J, 1) . "\n";
}
?>
