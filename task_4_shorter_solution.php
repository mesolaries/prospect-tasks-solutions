<?php

// 4.1. An extra and shorter solution of task_4

function split($delimeter, $string)
{
    // Escaping 'delimeter' as it can be a part of regex pattern
    $delimeter = preg_quote($delimeter);
    $result = preg_split("/$delimeter/", $string);
    return $result;
}


// Test
print_r(split(':', 'foo:*:1023:1000::/home/foo:/bin/sh'));
