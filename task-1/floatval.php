<?php

/**
 * (PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)
 * floatval — Get float value of a variable 
 */

$a = '122.34343The';
$float_value_of_a = floatval($a);
echo $float_value_of_a; // 122.34343

$b = 'The122.34343';
$float_value_of_b = floatval($b);
echo $float_value_of_b; // 0

$c = [];
$float_value_of_c = floatval($c);
echo $float_value_of_c; //0

$d = [1];
$float_value_of_d = floatval($d);
echo $float_value_of_d; //1