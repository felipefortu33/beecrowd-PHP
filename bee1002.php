<?php
$pi = 3.14159;

$raio = (float)readline("Digite o valor do raio: ");

//$area = $pi * ($raio * $raio) pow refere-se a potenciação.
$area = $pi * pow($raio, 2);

echo"A=" . number_format($area, 4, ".", "") . PHP_EOL;

//link do problema no beecrowd https://judge.beecrowd.com/pt/problems/view/1002