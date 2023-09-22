<?php 
$keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third"
);

$values = array(
    "field1value" => "dinosaur",
    "field2value" => "pig",
    "field3value" => "platypus"
);

/*$keysAndValues = array();

foreach ($keys as $key => $value) {
    $valueKey = $value . "value";
    if (isset($values[$valueKey])) {
        $keysAndValues[$value] = $values[$valueKey];
    }
}

print_r($keysAndValues);*/
/*// Sử dụng array_combine để kết hợp các mảng $keys và $values
$keysAndValues = array_combine($keys, $values);

print_r($keysAndValues);*/
$keysAndValues = array_combine($keys, $values);

foreach ($keysAndValues as $key => $value) {
    echo "$key: $value<br>";}
?>