<?php
/**
 * The str_rot13() function performs the ROT13 encoding on a string.
 * The ROT13 encoding shifts every letter 13 places in the alphabet. Numeric and non-alphabetical characters remains untouched.
 * Tip: Encoding and decoding are done by the same function. If you pass an encoded string as argument, the original string will be returned.
 */
echo str_rot13("Hello World");
echo "<br>";
echo str_rot13("Uryyb Jbeyq");