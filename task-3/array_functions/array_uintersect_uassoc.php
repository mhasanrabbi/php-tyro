<?php
//Compare the keys and values of two arrays (using two user-defined functions for comparison) and return the matches

function myfunction_key($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

function myfunction_value($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","b"=>"green","c"=>"green");

$result=array_uintersect_uassoc($a1,$a2,"myfunction_key","myfunction_value");
print_r($result);