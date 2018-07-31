<?php
  $names = array(
    'Dan'=>array('Age'=>22,'Likes'=>'gaming', 'Food' =>array("Pasta", "Pizza")),
    'Mike'=>array('Age'=>49,'Likes'=>'golf', 'Food' =>array("Salad", "Cereal")),
    'Nancy'=>array('Age'=>48,'Likes'=>'vollyeball', 'Food' =>array("Fish", "Bread")),
    'Ben'=>array('Age'=>25,'Likes'=>'hunting', 'Food' =>array("Burgers", "Fries")),
    'Gabby'=>array('Age'=>18,'Likes'=>'soccer', 'Food' =>array("Wings", "Beer"))
  );

  foreach($names as $key => $value) {
    echo  $key . " likes " . $value['Likes'] . ", and eats " . $value['Food'][0] . "<br>";
  }
?>

<?php
  $computer = "I dont like green eggs and ham";
  $user = "Eggs";

  $haystack = strtolower($computer);
  $needle = strtolower($user);
  $pos = strpos($haystack, $needle);

  if($pos === false) {
    echo "needle not found in haystack";
  }
  else {
    echo "found the needle in haystack";
    echo "located at $pos";
  }
?>

<?php
  echo $_SERVER['HTTP_USER_AGENT'];
?>
