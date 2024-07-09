<?php

$cordenadas = explode(" ", readline());

$x = $cordenadas[0];
$y = $cordenadas[1];

while ($x != 0 && $y != 0) {

    if ($x > 0 && $y > 0){
        echo"primeiro" . PHP_EOL;

    }else if ($x < 0 && $y > 0){
        echo"segundo" . PHP_EOL;
    }else if ($x < 0 && $y < 0){
        echo"terceiro" . PHP_EOL;
    }else {
        echo"quarto" . PHP_EOL;
    }
    $cordenadas = explode(" ", readline());

$x = $cordenadas[0];
$y = $cordenadas[1];
}