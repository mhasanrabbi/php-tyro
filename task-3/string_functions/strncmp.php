<?php
//Binary safe string comparison of the first n characters

$var1 = 'Hello John';
$var2 = 'Hello Doe';
if (strncmp($var1, $var2, 5) === 0) {
	echo 'First 5 characters of $var1 and $var2 are equals in a case-sensitive string comparison';
}
?>