<?php

// Find lowest value

echo min(2, 3, 1, 6, 7);  // 1
echo min(array(2, 4, 5)); // 2
echo min(0, 'hello');     // 0
echo min('hello', 0);     // hello