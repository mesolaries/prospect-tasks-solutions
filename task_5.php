<?php

// 5. Count every symbol in string

function letters($string)
{
    $string = strtolower($string);
    $letter_count = array();
    for ($i=0; $i < strlen($string); $i++) {
        if (!array_key_exists($string[$i], $letter_count)) {
            $count = 1;
            $letter_count[$string[$i]] = $count;
        } else {
            $count = $letter_count[$string[$i]] + 1;
            $letter_count[$string[$i]] = $count;
        }
    }
    return $letter_count;
}


// Test
print_r(letters('Hello'));
