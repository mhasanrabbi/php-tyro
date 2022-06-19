<?php 
// Returns exp(number) - 1, computed in a way that is accurate even when the value of number is close to zero 
echo(expm1(0) . "<br>");
echo(expm1(1) . "<br>");
echo(expm1(10) . "<br>");
echo(expm1(4.8));