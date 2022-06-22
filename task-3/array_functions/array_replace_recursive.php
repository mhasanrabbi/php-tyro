<?php

// Replaces elements from passed arrays into the first array recursively

$base = array('citrus' => array("orange"), 'berries' => array("blackberry", "raspberry"),);
$replacements = array('citrus' => array('pineapple'), 'berries' => array('blueberry'));

$basket = array_replace_recursive($base, $replacements);
print_r($basket);

$basket = array_replace($base, $replacements);
print_r($basket);