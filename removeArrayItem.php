<?php
$array = array("car", "dan", "wow", "amazing", "easy", "new");

$numItems = 0;
while(!empty($array)) {
    $randomItem = array_rand($array);
    echo $array[$randomItem] . "<br><br>";
    unset($array[$randomItem]);
}
