<?php
$dividend = 100;
$divisor = 8;
$quotientfloat = $dividend / $divisor;
$round = floor($quotientfloat);
$totalval = $divisor * $round;
$result = $dividend - $totalval;


echo $result;
?>