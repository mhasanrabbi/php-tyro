<?php
//Return a formatted string
$number = 9;
$str = "Beijing";
$txt = vsprintf("There are %u million bicycles in %s.", array($number, $str));
echo $txt;