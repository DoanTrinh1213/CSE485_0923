<?php 
    $array1 = [
                [77, 87],
                [23, 45]
            ];
    $array2 = ['giá trị 1', 'giá trị 2'];


    $result = [];
    for($i = 0; $i<count(($array1)); $i++){
        $mergedArray = array_merge([$array2[$i]], $array1[$i]);
        $result[$i] = $mergedArray;
    }
    echo '<pre>';
    print_r($result);
    echo '</pre>';
?>