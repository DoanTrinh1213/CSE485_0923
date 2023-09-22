<?php
$arrs = ['1', 'B', 'C', 'E'];

$lowercaseArrs = array_map('strtolower', $arrs); //array_map() để áp dụng hàm strtolower() lên từng phần tử trong mảng $arrs.
echo "<pre>";
print_r($lowercaseArrs);
echo "</pre>";
?>