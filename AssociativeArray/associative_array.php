<?php

$arr = array(

    "Bill"=> 10,
    "Joe" => 20, // joe is the key and 20 is the value
    "Peter" => 30
);

var_dump($arr);

echo "<br>";

echo "<pre>";
print_r($arr);
echo "</pre>";

echo $arr ["Joe"]; // 20

?>