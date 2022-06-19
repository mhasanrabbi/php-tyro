<?php

// Seeds the Mersenne Twister Random Number Generator

mt_srand(mktime(1));
echo (mt_rand());