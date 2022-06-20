<?php

// Convert binary into hexadecimal representation

$hex = bin2hex('Hello world!');

var_dump($hex);
var_dump(hex2bin($hex));