<?php

$ddd_para_cidade = array(
    61 => "Brasilia",
    71 => "Salvador",
    11 => "Sao Paulo",
    21 => "Rio de Janeiro",
    32 => "Juiz de Fora",
    19 => "Campinas",
    27 => "Vitoria",
    31 => "Belo Horizonte"
);


$ddd = readline();

if (array_key_exists($ddd, $ddd_para_cidade)) {
    echo $ddd_para_cidade[$ddd];
} else {
    echo "DDD nao cadastrado";
}
?>