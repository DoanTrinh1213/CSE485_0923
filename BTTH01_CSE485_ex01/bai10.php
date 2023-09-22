<?php
$arrs = ['1', 'B', 'C', 'E'];
$lowercaseArrs = array_map('strtolower', $arrs);
echo "<pre>";
print_r($lowercaseArrs);
echo "</pre>";
?>