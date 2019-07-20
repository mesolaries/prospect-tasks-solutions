<?php

// 2. Find min and max value in given array of 10 different numbers

function find_min_max($mas)
{
    sort($mas);
    print_r('max: ' . end($mas) . ', min: ' . $mas[0]);
}

// Test
$test_array = array(2,44,65,2333,67,11,8);
find_min_max($test_array);
