<?php

// 4. Make a function that works with the algorithm of sort() function
// (i.e. sort() function clone)

function quick_sort($my_array)
{
    $lower = $greater = array();
    if (count($my_array) < 2) {
        return $my_array;
    }
    $pivot_key = key($my_array);
    $pivot = array_shift($my_array);
    foreach ($my_array as $val) {
        if ($val <= $pivot) {
            $lower[] = $val;
        } elseif ($val > $pivot) {
            $greater[] = $val;
        }
    }
    return array_merge(quick_sort($lower), array($pivot_key=>$pivot), quick_sort($greater));
}




// Test
$my_array = array(0, 2, 0, -5, 150, -150, 25, 8, 6, 4);
print_r(quick_sort($my_array));
