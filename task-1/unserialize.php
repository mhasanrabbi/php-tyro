<?php

/**
 * Creates a PHP value from a stored representation
 */

$data = serialize(array("Red", "Green", "Blue"));
echo $data;
$unserializeData = unserialize($data);
echo $unserializeData;