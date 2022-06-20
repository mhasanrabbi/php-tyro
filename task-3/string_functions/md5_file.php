<?php

// Calculates the md5 hash of a given file

$filename = "test.txt";
$md5file = md5_file($filename);
echo $md5file;