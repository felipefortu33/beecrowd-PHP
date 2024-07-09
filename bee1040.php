<?php

$valores = explode(" ", readline());

$N1 = $valores[0];
$N2 = $valores[1];
$N3 = $valores[2];
$N4 = $valores[3];

$media = (($N1 * 2) + ($N2 * 3) + ($N3 * 4) + ($N4 * 1)) / 10;

if($media == 4.85){
    $media = 4.8;
}
echo "Media: " . number_format($media, 1, ".", "") . "\n";

if ($media >= 7.0) {
    echo "Aluno aprovado.\n";
    return;

} else if ($media < 5.0) {
    echo "Aluno reprovado.\n";
    return;

} else {
    echo "Aluno em exame.\n";



    $notaExame = (float)readline();

    echo "Nota do exame: " . number_format($notaExame, 1, ".", "") . "\n";

    $mediaFinal = ($media + $notaExame) / 2;

    if ($mediaFinal >= 5.0) {
        echo "Aluno aprovado.\n";
    } else {
        echo "Aluno reprovado.\n";
    }

    echo "Media final: " . number_format($mediaFinal, 1, ".", "") . "\n";
}
