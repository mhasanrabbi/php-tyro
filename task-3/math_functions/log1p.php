<?php

//log1p() returns log(1 + num) computed in a way that is accurate even when the value of num is close to zero. log() might only return log(1) in this case due to lack of precision.

echo (log1p(2.7183) . "<br>");
echo (log1p(2) . "<br>");
echo (log1p(1) . "<br>");
echo (log1p(0));