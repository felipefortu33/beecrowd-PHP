<?php

$n = (int)readline();

$dentro = 0;
$fora = 0;

for ($i = 0; $i < $n; $i++) {
    $x = (int)readline();


if ($x >= 10 && $x <= 20) {
    $dentro++;
} else {
    $fora++;
}
}
echo "$dentro in\n";
echo"$fora out\n";