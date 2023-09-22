<?php 
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];

// Lấy giá trị = 3 mà có key là 'b'
$valueB = $a['b']['o']['b'];
echo "Key b có giá trị = $valueB <br>";

// Lấy giá trị = 1 mà có key là 'c'
$valueC = $a['a']['c'];
echo "Key c có giá trị  = $valueC <br>";

// Lấy thông tin của phần tử có key là 'a'
$info = $a['a'];
echo "Thông tin của phần tử có key 'a':<br>";
print_r($info);
?>