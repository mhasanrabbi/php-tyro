<?php
// Finds whether a value is not a number

// Invalid calculation, will return a 
// NaN value
$nan = acos(8);

var_dump($nan, is_nan($nan));