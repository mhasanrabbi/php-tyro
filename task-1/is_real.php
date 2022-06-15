<?php

/**
 * Is used to test whether a variable is a float or not. The function is an alias of is_float()
 * This alias was DEPRECATED in PHP 7.4.0, and REMOVED as of PHP 8.0.0.
 */

var_dump(is_real(4.01));    //outputs-bool(true)
var_dump(is_real('ter'));   //outputs-bool(false)
var_dump(is_real(44));      //outputs-bool(false)
var_dump(is_real(44.8));    //outputs-bool(true)
var_dump(is_real(3e7));     //Scientific Notation    //outputs-bool(true)
var_dump(is_real(false));   //outputs-bool(false)