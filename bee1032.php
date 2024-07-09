<?php

$valores = explode(" ", readline("Digite o código do produto seguido da quantidade: "));

$cod = $valores[0];
$qtd = $valores[1];

switch ($cod) {
    case 1:
        $total = $qtd * 4.00; //cachorrro quente
        break;

    case 2:
        $total = $qtd * 4.50; //x-salada
        break;
    case 3:
        $total = $qtd * 5.00; //x-bacon
        break;
    case 4:
        $total = $qtd * 2.00; //torrada simples
        break;
    case 5:
        $total = $qtd * 1.50; //refreigerante
        break;
        default:
        $total = 0;
        break;
}
echo "total: R$ " . number_format($total, 2, ".", "") . PHP_EOL;