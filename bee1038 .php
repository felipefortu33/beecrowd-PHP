<?php

$valores = explode(" ", readline());

$cod = (float) $valores[0];
$qtd = (float) $valores[1];


switch ($cod) {
    case 1:
        //cahorro quente - 4.00
        $total = $qtd * 4.00;
        break;
    case 2:
        //X-salada - 4.50
        $total = $qtd * 4.50;
        break;
    case 3:
        //X-bacon - 5.00
        $total = $qtd * 5.00;
        break;
    case 4:
        //Torrada simples - 2.00
        $total = $qtd * 2.00;
        break;
    case 5:
        //refrigerante - 1.50
        $total = $qtd * 1.50;
        break;
}

echo "Total: R$ " . number_format($total, 2, ".", "") . "\n";