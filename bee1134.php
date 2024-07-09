<?php

$combustivel = (int)readline();
$alcool = 0;
$gasolina = 0;
$diesel = 0;

while ($combustivel != 4) {
    switch ($combustivel) {
        case 1:
            $alcool++;
            break;
            case 2:
                $gasolina++;
                break;
                case 3:
                    $diesel++;
                    break;
        
    }
    $combustivel = (int)readline();
}

echo "MUITO OBRIGADO" . PHP_EOL;
echo "Alcool: $alcool" . PHP_EOL;
echo "Gasolina: $gasolina" . PHP_EOL;
echo "Diesel: $diesel" . PHP_EOL;