<?php
// echo "conditionals in php";
echo "<br>";
$age = 30;
// if ($age >= 18) {
//     echo "you >= 18";
// } else {
//     echo "you < 18";
// }

// $date_time = date("F j"); // in ngày tháng theo thời gian thực
// echo $date_time;

$hours = date("H"); // in giờ quốc tế not VN
// echo $hours;
// if ($hours < 12) {
//     echo "good morning";
// } else if ($hours >= 12 && $hours <= 17) {
//     echo "good afternoon";
// } else {
//     echo "good evening";
// }

$cmt = [
    'good', 'i like it',
];
// if (empty($cmt)) {
//     echo "No comment";
// } else {
//     echo "there are some comment";
// }

// echo empty($cmt) ? "no comment" : "there are comment";
// $first_cmt = !empty($cmt) ? $cmt[0] : 'No comment';
// echo $first_cmt;

// coalescing operator
// $first_cmt = $cmt[0] ?? 'No commment'; // nếu cmt[0] == NULL thì in no comment
// echo $first_cmt;

$favorite_color = 'blue';
switch ($favorite_color) {
    case 'red':
        echo 'you choose red';
        break;
    case 'blue':
        echo 'you choose blue';
        break;
    case 'green':
        echo 'you choose green';
        break;
    default:
        echo 'not color';
}
