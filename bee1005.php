<?php

$a = (float)readline();
$b = (float)readline();

$pesoa = 3.5;
$pessb = 7.5;

$MEDIA = (($a * $pesoa) + ($b * $pessb)) / ($pesoa + $pessb);

echo"MEDIA = " . number_format($MEDIA, 5, ".", "") . PHP_EOL;

//link do problema no beecrowd https://judge.beecrowd.com/pt/problems/view/1005