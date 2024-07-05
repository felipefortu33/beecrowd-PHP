<?php

$x = (int)readline();
$y = (float)readline();

$media = (float) $x / $y;

echo number_format($media, 3, '.', '') . " km/l" . "\n";

