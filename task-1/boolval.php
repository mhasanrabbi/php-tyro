<?php

/**
 *(PHP 5 >= 5.5.0, PHP 7, PHP 8)
 *boolval — Get the boolean value of a variable
 */
echo '0:        ' . (boolval(0) ? 'true' : 'false') . "\n"; //false
echo '42:       ' . (boolval(42) ? 'true' : 'false') . "\n"; //true
echo '0.0:      ' . (boolval(0.0) ? 'true' : 'false') . "\n"; //false
echo '4.2:      ' . (boolval(4.2) ? 'true' : 'false') . "\n"; //true
echo '"":       ' . (boolval("") ? 'true' : 'false') . "\n"; //false
echo '"string": ' . (boolval("string") ? 'true' : 'false') . "\n"; //true
echo '"0":      ' . (boolval("0") ? 'true' : 'false') . "\n"; //false
echo '"1":      ' . (boolval("1") ? 'true' : 'false') . "\n"; // true
echo '[1, 2]:   ' . (boolval([1, 2]) ? 'true' : 'false') . "\n"; //true
echo '[]:       ' . (boolval([]) ? 'true' : 'false') . "\n"; //false
echo 'stdClass: ' . (boolval(new stdClass) ? 'true' : 'false') . "\n"; //true