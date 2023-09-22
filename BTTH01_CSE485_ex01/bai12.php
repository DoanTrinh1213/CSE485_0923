<?php 
    $numbers = [
        'key1' => 12, 
        'key2' => 30, 
        'key3' => 4, 
        'key4' => -123, 
        'key5' => 1234, 
        'key6' => -12565, 
       ];
   
    echo "Phần tử đầu tiên của mảng là: " .reset($numbers) .'<br>';

    echo "Phần tử cuối cùng của mảng là: " .end($numbers) . '<br>';

    echo "Số lón nhất trong mảng là: " .max($numbers) .'<br>';
     
    echo "Số nhỏ nhất trong mảng là: " .min($numbers) .'<br>';

    echo "Tổng các giá trị trong mảng là: " .array_sum($numbers) .'<br>';
    
    
    // Sắp xếp theo thứ tự tăng
    asort($numbers); 
    echo '<pre>';
    print_r($numbers);
    echo '</pre>';
    echo " Sắp xếp theo chiều giảm: <br>";
    arsort($numbers); // 
    echo '<pre>';
    print_r($numbers);
    echo '</pre>';

    // Sắp xếp theo thứ tự tnwg, giảm dần giảm các key
    echo "Sắp xếp theo chiều tăng của khóa key <br>";
    ksort($numbers); 
    echo '<pre>';
    print_r($numbers);
    echo '</pre>';

    echo "Sắp xếp theo chiều giảm của khóa key <br>";
    krsort($numbers); 
    echo '<pre>';
    print_r($numbers);
    echo '</pre>';
?>