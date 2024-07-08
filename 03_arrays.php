<?php
//simple array
$numbers = [1, 2, 3];
$fruits = array("apple", "orange");

print_r($numbers);
var_dump($fruits);

echo $fruits[1];

// ASSOC array
$colors = [
    1 => 'red',
    8 => 'blue',
    12 => 'yellow',
];
echo $colors[12];

// string index
$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f',
];

echo $hex['blue'];


// tabular data
$person = [
    'first_name' => 'Vlahd',
    'last_name' => 'Bamb',
    'email' => 'vlahd@gmail.com',
];

echo $person['email'];

// 2D array
$people = [
    [
        'first_name' => 'Vlahd',
        'last_name' => 'Bamb',
        'email' => 'vlahd@gmail.com',
    ],
    [
        'first_name' => 'Shar',
        'last_name' => 'Bamb',
        'email' => 'Shar@gmail.com',
    ],
    [
        'first_name' => 'Mizuki',
        'last_name' => 'Bamb',
        'email' => 'Mizuki@gmail.com',
    ]
];

echo $people[1]['email'];

// returns an array of json values
var_dump(json_encode($people));

$jsonified_data = json_encode($people);

print_r(json_decode($jsonified_data));
