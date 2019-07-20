<?php

// 1. Count vowels (saitlər) in given string

function count_vowel($sentence)
{
    $result = preg_match_all('/[AEIOUaeiou]/', $sentence);
    return $result;
}

// Test
print_r(count_vowel('test set at team mate'));
