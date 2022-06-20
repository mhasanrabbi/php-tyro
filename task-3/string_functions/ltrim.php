<?php

// Strip whitespace (or other characters) from the beginning of a string

$str = "Hello World!";
echo $str . "<br>";
echo ltrim($str, "Hello");