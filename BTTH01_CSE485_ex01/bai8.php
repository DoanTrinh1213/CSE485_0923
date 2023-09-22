<?php 
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
$maxLength =0;
$minLength = PHP_INT_MAX ;// hằng số trong php đại diện gtri nguyen tối đa 
    foreach($array as $string){
        $length = strlen($string);
        $maxLength = max($maxLength, $length);
        $minLength = min($minLength, $length);

    }
echo "Chuỗi lớn nhất là program is PHP, độ dài =  " . $maxLength . "<br>";
echo "Chuỗi nhỏ nhất là is, độ dài =  " . $minLength . "<br>";

?>