<?php
// for ($i = 0; $i < 10; $i++) {
//     echo $i . '<br>';
// }
$i = 20;
// while ($i < 20) {
//     echo "i = $i<br>";
//     $i++;
// }

// do {
//     echo "i = $i<br>";
//     $i++;
// } while ($i <= 10);

$icons = ['haha', 'hehe', 'hihi', 'huhu'];
// for ($i = 0; $i < count($icons); $i++) {
//     echo "$icons[$i] <br>";
// }

// foreach ($icons as $icon) {
//     echo "$icon <br>";
// }

// foreach ($icons as $index => $icon) {
//     echo "$index - $icon <br>";
// }

$person = [
    'full_name' => 'khong hoang phi',
    'email' => 'phi@gmail.com',
    'age' => 22,
];
foreach ($person as $key => $value) {
    echo "$key: $value <br>";
}
