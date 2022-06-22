<?php

// Exchanges all keys with their associated values in an array

$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);

print_r($flipped);