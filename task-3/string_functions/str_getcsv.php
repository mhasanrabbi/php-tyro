<?php

//Parse a CSV string into an array 

$string = 'PHP,Java,Python,Kotlin,Swift';
$data = str_getcsv($string);

var_dump($data);