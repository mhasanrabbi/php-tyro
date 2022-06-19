<?php

// Returns the floating point remainder of dividing the dividend (num1) by the divisor (num2). The remainder (r) is defined as: num1 = i * num2 + r, for some integer i. If num2 is non-zero, r has the same sign as num1 and a magnitude less than the magnitude of num2. 

$x = 5.7;
$y = 1.3;
$r = fmod($x, $y);
// $r equals 0.5, because 4 * 1.3 + 0.5 = 5.7

echo $r;