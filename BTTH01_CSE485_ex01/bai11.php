<?php
$array = array(1, 2, 3, 4, 5);

// Xóa phần tử thứ 3
array_splice($array, 2, 1);

// Hiển thị kết quả
echo "<pre>";
print_r($array);
echo "</pre>";
?>