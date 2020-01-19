<?php

declare(strict_types=1); // strict requirement
/*
7 kyu Reverse words
Instructions:
Complete the function that accepts a string parameter, and reverses each word in the string. All spaces in the string should be retained.
Examples:
"This is an example!" ==> "sihT si na !elpmaxe"
"double spaces" ==> "elbuod secaps"
*/

// Expecting parameter data type to be string, it will throw a "Fatal Error" if the data type is not 
function reverseWords(string $str)
{
    // Break the string into an array; additional spaces, beyond the first, will be saved as an empty string element
    $arr = explode(" ", $str);
    // Loop through the array, reverse each string element; The "&" before "$elem" allows array elements to be directly modified (the value is assigned by reference in this case)
    foreach ($arr as &$elem) {
        $elem = strrev($elem);
    }

    // Join the array elements, with a space, into a string
    return implode(" ", $arr);
}

/* 
Top Solution, per Codewars:
function reverseWords($str) {
return implode(' ', array_reverse(explode(' ', strrev($str)))) ;
}
*/
