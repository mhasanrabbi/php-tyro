<?php
// Finds whether a variable is null
// boolean value

error_reporting(E_ALL);

$foo = NULL;
var_dump(is_null($inexistent), is_null($foo));