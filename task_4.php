<?php

// 4. Make a function that works with the algorithm of explode() function
// (i.e. explode() function clone)


function split($delimeter, $string)
{
    if ($string) {
        $result = array();
        $word = '';
        for ($i=0; $i < strlen($string); $i++) {
            if ($string[$i] != $delimeter) {
                $word = $word . $string[$i];
            } else {
                array_push($result, $word);
                $word = '';
            }
        }
        array_push($result, $word);  // adding the last word left to array
        return $result;
    } else {
        return array('');
    }
}


// Test
print_r(split(' ', 'piece1 piece2 piece3 piece4 piece5 piece6'));
