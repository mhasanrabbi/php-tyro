<?php

/**
 * (PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)
 * debug_zval_dump — Dumps a string representation of an internal zval structure to output
 */

$var1 = 'Hello';
$var1 .= ' World';
$var2 = $var1;

debug_zval_dump($var1);