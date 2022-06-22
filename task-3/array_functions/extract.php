<?php
// Assign the values "Cat", "Dog" and "Horse" to the variables $a, $b and $c

$a = "Original";
$my_array = array("a" => "Cat", "b" => "Dog", "c" => "Horse");
extract($my_array);
echo "\$a = $a; \$b = $b; \$c = $c";