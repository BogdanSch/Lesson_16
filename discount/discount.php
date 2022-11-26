<?php

$now = time();
$future = mktime(23,0,0,12,31,2022);

// echo date('l d F Y G:i:s', $now);
// echo "\n";
echo "Discount ends ".date('l d F Y G:i:s', $future);
echo "\n";

$diff = $future - $now;
$days = floor($diff / (60 * 60 * 24));
$hours = floor(($diff % (60 * 60 * 24)) / 3600);
$months = floor($diff % (60 * 60));
$seconds = floor($diff % 60);

echo "Till the end of the discount $days days $hours hours left";