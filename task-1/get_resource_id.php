<?php

/**
 * (PHP 8)
 * get_resource_id — Returns an integer identifier for the given resource
 */

$handle = fopen("php://stdout", "w");

echo (int) $handle . "\n";

echo get_resource_id($handle);