<?php

//Write a formatted string to a stream

if (!($fp = fopen('currency.txt', 'w'))) {
	return;
}

$money1 = 68.75;
$money2 = 54.35;
$money = $money1 + $money2;
// echo $money will output "123.1";
$len = fprintf($fp, '%01.2f', $money);
// will write "123.10" to currency.txt

echo "wrote $len bytes to currency.txt";
// use the return value of fprintf to determine how many bytes we wrote