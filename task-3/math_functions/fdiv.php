<?php

//  Returns the floating point result of dividing the num1 by the num2. If the num2 is zero, then one of INF, -INF, or NAN will be returned.

var_dump(fdiv(5.7, 1.3)); // float(4.384615384615385)
var_dump(fdiv(4, 2)); // float(2)
var_dump(fdiv(1.0, 0.0)); // float(INF)
var_dump(fdiv(-1.0, 0.0)); // float(-INF)
var_dump(fdiv(0.0, 0.0)); // float(NAN)