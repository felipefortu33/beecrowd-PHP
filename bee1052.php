<?php
// Define um array para mapear números para meses
$numero_para_mes = array(
    1 => "January",
    2 => "February",
    3 => "March",
    4 => "April",
    5 => "May",
    6 => "June",
    7 => "July",
    8 => "August",
    9 => "September",
    10 => "October",
    11 => "November",
    12 => "December"
);

// Leia o número do usuário
$numero = readline();

// Verifique se o número está no array
if (array_key_exists($numero, $numero_para_mes)) {
    echo $numero_para_mes[$numero] . PHP_EOL;
} 
?>
