<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];

// sum
$sum = array_sum($arrs);
echo "Tổng các phần tử = " . implode(' + ', $arrs) . " = " . $sum . "<br>";

//multi
$product = array_product($arrs);

echo "Tích các phần tử = " . implode(' * ', $arrs) . " = " . $product . "<br>";

// Subtraction
$diff = $arrs[0]; 
for ($i = 1; $i < count($arrs); $i++) {
    $diff -= $arrs[$i];
}
echo "Hiệu các phần tử = " . implode(' - ', $arrs) . " = " . $diff . "<br>";

// dividing
$quotient = $arrs[0]; 
for ($i = 1; $i < count($arrs); $i++) {
    if ($arrs[$i] != 0) {
        $quotient /= $arrs[$i];
    } else {
        echo "Lỗi ";
        exit;
    }
}
echo "Thương các phần tử = " . implode(' / ', $arrs) . " = " . $quotient . "<br>";
?>