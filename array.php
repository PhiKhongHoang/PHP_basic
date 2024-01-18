<?php
// echo "we talk about array <br>";
// $some_numbers = [1,2,3,4,5];
// var_dump($some_numbers);

// $fruits = ['haha', 'hehe', 'hihi'];
// print_r($fruits);
// echo $fruits[0];

// $fruits = array('haha', 'hehe', 'hihi');
// print_r($fruits);
// echo $fruits[0];

// associative array
$color = [
    3 => 'red', // key - value
    5 => 'blue',
    7 => 'green',
];
// echo $color[5];

// key as a string
$hex_color = [
    'red' => '#ff0000',
    'blue' => '#0000ff',
    'green' => '#00ff00',
];
// echo $hex_color['red'];

// key as a string
$person = [
    'full_name' => 'Khong Hoang Phi',
    'age' => '22',
    'email' => 'phi@gmail.com',
];
// echo $person['full_name'];
// print_r($person);

$persons = [
    [
        'full_name' => 'Khong Hoang Phi',
        'age' => '22',
        'email' => 'phi@gmail.com',
    ], [
        'full_name' => 'Khong Hoang Phi1',
        'age' => '22',
        'email' => 'phi@gmail.com',
    ], [
        'full_name' => 'Khong Hoang Phi2',
        'age' => '22',
        'email' => 'phi@gmail.com',
    ],
];
// print_r($persons);
// echo $persons[1]['full_name'];
// var_dump(json_encode($persons)); // chuyển dữ liệu sang json
