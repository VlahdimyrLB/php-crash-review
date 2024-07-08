<?php
$fruits = ["apple", "orange", "pear"];

// get length
echo count($fruits);

// search array
var_dump(in_array('apple', $fruits));

// add to array
$fruits[] = "grapes";
array_push($fruits, "cocoa", "strawberry");
array_unshift($fruits, "lomboy"); // add in beginning

// remove form array
array_pop($fruits); // remove end
array_shift($fruits); // remove beginning
unset($fruits[2]); // remove specific

// split into 2 chunks or by two
$chunked_array = array_chunk($fruits, 2);

print_r($chunked_array);
print_r($fruits);

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

// concat arrays
$array3 = array_merge($arr1, $arr2);

// by using spread oprator
$array4 = [...$arr1, ...$arr2];

print_r($array3);
print_r($array4);

// combine
$a = ["green", "red", "yellow"];
$b = ["avocado", "apple", "banana"];

$c = array_combine($a, $b);
print_r($c);

$keys = array_keys($c);
print_r($keys);

// flip keys to values
$flipped = array_flip($c);
print_r($flipped);

// range
$numbers = range(1, 10);
print_r($numbers);

// Map = create new array and use each values
$newNumbers = array_map(function ($number) {
    return "Number $number";
}, $numbers);
print_r($newNumbers);

// Filter 
$lessThanTen = array_filter($numbers, fn ($number) => $number <= 5);
print_r($lessThanTen);

// Reduce = good for adding all number together $carry starts at zero
$sum = array_reduce($numbers, fn ($carry, $number) => $carry + $number);
var_dump($sum);
