<?php

$pares = 0;
for ($i = 0; $i < 5; $i++) {
    $valor = floatval(trim(fgets(STDIN)));
    
    if ($valor % 2 == 0) {
        $pares++;
    }


}
echo "$pares valores pares \n";