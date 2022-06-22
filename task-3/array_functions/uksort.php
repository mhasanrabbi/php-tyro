<?php
//Sort an array by keys using a user-defined comparison function
function my_sort($a,$b)
{
if ($a==$b) return 0;
return ($a<$b)?-1:1;
}

$arr=array("a"=>4,"b"=>2,"c"=>8,"d"=>6);
uksort($arr,"my_sort");