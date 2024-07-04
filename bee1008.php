<?php

$NUMBER = readline();

$horastr = readline();

$valorhr = (float)readline();

$SALARY =  $horastr * $valorhr;

echo "NUMBER = " . $NUMBER;
echo"SALARY = " . number_format($SALARY, 2, ".", "") . PHP_EOL;
//link do problema no beecrowd https://judge.beecrowd.com/pt/problems/view/1008

