<?php

/**
 * (PHP 4, PHP 5, PHP 7, PHP 8)
 * is_double — Finds whether the type of a variable is double
 * 
 */

$a = 32;
echo "a is " . is_double($a) . "\n";

$b = 0;
echo "b is " . is_double($b) . "\n";

$c = 32.5;
echo "c is " . is_double($c) . "\n";

$d = "32";
echo "d is " . is_double($d) . "\n";

$e = true;
echo "e is " . is_double($e) . "\n";

$f = "null";
echo "f is " . is_double($f) . "\n";

$g = 1.e3;
echo "g is " . is_double($g) . "\n";