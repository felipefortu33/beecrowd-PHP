<!--

$pares = 0;
$impar = 0;
$positivos = 0;
$negativos = 0;
for ($i = 0; $i < 5; $i++) {
    $valor = floatval(trim(fgets(STDIN)));
    
    if ($valor % 2 == 0) {
        $pares++;
    }
    else{
        $impar++;
    }
    if ($valor > 0) {
        $positivos++;
    }
    else{
        $negativos++;
    }


}
echo "$pares valor(es) par(es)\n";
echo "$impar valor(es) impar(es)\n";
echo "$positivos valor(es) positivo(s)\n";
echo "$negativos valor(es) negativo(s)\n"; -->

<?php
// Inicialize a contagem de cada tipo
$pares = 0;
$impares = 0;
$positivos = 0;
$negativos = 0;

// Leia 5 valores do usuário
for ($i = 0; $i < 5; $i++) {
    $valor = intval(trim(fgets(STDIN)));
    
    // Verifique se o valor é par ou ímpar
    if ($valor % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }

    // Verifique se o valor é positivo ou negativo
    if ($valor > 0) {
        $positivos++;
    } elseif ($valor < 0) {
        $negativos++;
    }
}

// Imprima a quantidade de cada tipo
echo $pares . " valor(es) par(es)\n";
echo $impares . " valor(es) impar(es)\n";
echo $positivos . " valor(es) positivo(s)\n";
echo $negativos . " valor(es) negativo(s)\n";
?>