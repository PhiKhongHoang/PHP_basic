<?php 
    // echo "we talk about variables ". '<br>';
    $name = 'phi';
    // echo $name;
    $age = 18;
    // echo $age;
    // $has_mercedes = false;
    // echo $has_mercedes;
    // var_dump($has_mercedes);
    // $product_price = 22.45;
    // var_dump($product_price);
    echo "<br>";
    echo $name. ' is '. $age. ' years old'."<br>";
    echo "$name is $age years old.";
    echo "<br>";
    echo 5 + 5;
    echo "<br>";
    echo '1' + '2';
    echo "<br>";
    echo "1" + "2";
    echo "<br>";
    $sum = '2'*'3';
    var_dump($sum);
    echo "<br>";

    // constants
    define('SERVER_NAME', 'localhost'); // tên hằng không có $
    define('DATABASE_NAME', 'test_db');
    echo "server: ".SERVER_NAME.', db: '.DATABASE_NAME;
    
    

?>