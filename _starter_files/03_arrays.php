<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

$numbers = [1,2,3];
$fruits = array('apple', 'orange');
//
//print_r($numbers);
//var_dump($numbers);

//echo $fruits[0];

// associative Array
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];
//
//echo $colors[4];

$hex = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f',
];

//echo $hex['red'];
//var_dump($hex);

$person = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'mail@hotmail.com'
];

//echo $person['first_name'];

$people = [
    [
        'first_name' => 'Brad',
        'last_name' => 'Traversy',
        'email' => 'mail@hotmail.com'
    ],
    [
        'first_name' => 'Tom',
        'last_name' => 'hanks',
        'email' => 'mail@hotmail.com'
    ],
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'mail@hotmail.com'
    ]
];

echo $people[1]['first_name'];

var_dump(json_encode($people));









