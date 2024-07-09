<?php

$senha = readline();
// enquanto senha for diferente de 2002
while ($senha != "2002") {
    echo"Senha Invalida" . PHP_EOL;
    $senha = readline();
    
}

echo "Acesso Permitido". PHP_EOL;