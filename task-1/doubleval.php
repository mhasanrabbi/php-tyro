<?php

/**
 * (PHP 4, PHP 5, PHP 7, PHP 8)
 * doubleval — Alias of floatval()
 */


$a = '122.34343The';
$double_value_of_a = doubleval($a);
echo $double_value_of_a . "\n"; // 122.34343

$b = 'The122.34343';
$double_value_of_b = doubleval($b);
echo $double_value_of_b . "\n"; // 0

$c = [];
$double_value_of_c = doubleval($c);
echo $double_value_of_c . "\n"; //0

$d = [1];
$double_value_of_d = doubleval($d);
echo $double_value_of_d . "\n"; //1


$f = 12345;
$double_value_of_f = doubleval($f);
echo $double_value_of_f . "\n"; //12345