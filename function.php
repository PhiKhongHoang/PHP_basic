<?php
// function sayHello($name)
// {
//     echo "hello $name <br>";
// }
// sayHello("phi");

// function sum($a, $b)
// {
//     return $a * $b;
// }
// echo sum(2, 3);

// function sum1($a = 2, $b = 3)
// {
//     return $a * $b;
// }
// echo sum1();
// echo sum1(3, 3);

// $muliply = function ($a, $b) {
//     return $a * $b;
// };
// echo $muliply(3, 4);

$sub = fn($a, $b) => $a - $b; // arrow function
// echo $sub(5, 1);

$names = [
    'jonh', 'anan', 'phi', 'tony',
];
// echo "number of items: " . count($names); // đếm sô phần tử của mảng
// var_dump(in_array('haha', $names)); // kiểm tra giá trị có tồn tại trong mảng không
// var_dump(in_array('phi', $names)); // kiểm tra giá trị có tồn tại trong mảng không
array_push($names, 'haha', 'hehe'); // thêm phần tử vào cuối mảng
array_unshift($names, 'satoshi'); // thêm vào đầu mảng
array_pop($names); // xóa phần tử cuối mảng
array_shift($names); // xóa phần tử đầu mảng
unset($names[3]); // xóa phần tử vị trí bất kì nhưng không đánh lại index
// print_r($names);
$chunked_array = array_chunk($names, 2); // chặt nhỏ ra mỗi khúc có 2 phần tử
// print_r($chunked_array);

$array_one = [1, 3, 5];
$array_two = [2, 4, 6];
$merged_array = array_merge($array_one, $array_two); // ghép 2 mảng
// print_r($merged_array);

$array_three = [...$merged_array]; // nhân bản của merged_array (cùng giá trị nhưng khác địa chỉ lưu) (chỉ chạy php > 7.4)
// print_r($array_three);

$array_four = [...$array_one, ...$array_two]; // nhân bản của merged_array (cùng giá trị nhưng khác địa chỉ lưu) (chỉ chạy php > 7.4)
// print_r($array_four);

$a = ['name', 'email', 'age'];
$b = ['hoang', 'phi@gmail.com', 18];
$c = array_combine($a, $b); // combine two array (2 mảng phải có cùng số lượng đối số)
// print_r($c);
// print_r(array_keys($c));
// print_r(array_values($c));
// print_r(array_flip($c)); // đảo key và value

$number = range(1, 10); // mảng từ 1->10
// print_r($number);
// $squared_number = array_map(function ($each_number) {
//     return $each_number * $each_number;
// }, $number); // tạo mảng mới có cùng số lượng nhưng giá trị khác mảng cũ
$squared_number = array_map(fn($each_number) => $each_number * $each_number, $number); // ánh xạ mảng nhưng giá trị khác mảng cũ
// print_r($squared_number);

$filtered_number = array_filter($number, fn($each_number) => $each_number % 2 == 0); // lọc giá trị chỉ lấy % 2 == 0
print_r($filtered_number);
