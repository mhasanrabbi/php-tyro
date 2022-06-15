<?php

/**
 * The function is_long() checks whether the type of a variable is integer.
 * boolean value
 */

$a = 33;
echo "a is ";
var_dump(is_long($a));
echo "<br>";

$b = "33";
echo "b is ";
var_dump(is_long($b));
echo "<br>";

$c = 33.5;
echo "c is ";
var_dump(is_long($c));
echo "<br>";

$d = "33.5";
echo "d is ";
var_dump(is_long($d));
echo "<br>";

$e = true;
echo "e is ";
var_dump(is_long($e));
echo "<br>";

$f = false;
echo "f is ";
var_dump(is_long($f));
echo "<br>";

$g = null;
echo "g is ";
var_dump(is_long($g));
echo "<br>";