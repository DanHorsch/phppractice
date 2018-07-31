<?php
$array = array("car", "dan", "wow", "amazing", "easy", "new");

$numItems = 0;
while(!empty($array)) {
    $randomItem = array_rand($array);
    echo $array[$randomItem] . "<br><br>";
    unset($array[$randomItem]);
}
// for($i = 0; $i < count($array); $i++) {
//   $newVar = array_rand($array);
//   unset($array[array_rand($array)]);
//   var_dump($array);
//   echo "<br><br>";
//   // echo $array[array_rand($array)] . "<br>";
//   // unset($array[])
//   // $numItems += 1;
// }
// // echo $numItems;
