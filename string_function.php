<?php
// echo "string function in php <br>";

$full_name = 'Khong Hoang Phi';
echo "length: " . strlen($full_name);
echo "<br>";
echo strrev($full_name); // đảo ngược hàm
echo "<br>";
echo strtolower($full_name);
echo "<br>";
echo strtoupper($full_name);
echo "<br>";
echo str_replace(' ', '-', $full_name); // thay thế kí tự
echo "<br>";
if (str_starts_with($full_name, 'Khong')) { // kiểm tra xâu có bắt đầu bằng 'khong'
    echo 'his name starts with khong';
}
echo "<br>";
if (str_ends_with($full_name, 'Phi')) { // kiểm tra xâu có kết thúc bằng 'phi'
    echo 'his name starts with Phi';
}
echo "<br>";
echo "<h1>html</h1>";
echo "<br>";
echo htmlspecialchars("<h1>html</h1>"); // có chữ gì in ra chữ đó (biến đoạn code đó thành string)
echo "<br>";
printf('i = %d', 3); // php cũng có printf
echo "<br>";
