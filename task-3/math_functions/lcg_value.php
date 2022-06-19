<?php
// lcg_value() returns a pseudo random number in the range of (0, 1). The function combines two CGs with periods of 2^31 - 85 and 2^31 - 249. The period of this function is equal to the product of both primes. 

echo lcg_value();
echo "<br/>";
echo lcg_value();