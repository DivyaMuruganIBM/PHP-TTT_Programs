<?php
$amount = 1368;

$hundreds = floor($amount / 100);
$amount = $amount % 100;

$fifties = floor($amount / 50);
$amount = $amount % 50;

$tens = floor($amount / 10);

echo "100 = $hundreds\n";
echo "50 = $fifties\n";
echo "10 = $tens\n";
?>
