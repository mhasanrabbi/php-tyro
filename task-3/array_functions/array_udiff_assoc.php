<?php
//Compare the keys and values of two arrays (using a built-in function to compare the keys and a user-defined function to compare the values) and return the differences

function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","b"=>"blue","c"=>"green");

$result=array_udiff_assoc($a1,$a2,"myfunction");
print_r($result);