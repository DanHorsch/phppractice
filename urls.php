<?php

$pages = array(
  "cheese" => array(
    "price" => 2.5, "name" => "super cheese", "description" => "the cheesiest", "itemNumber" => 1
  ),
  "sausage" => array(
    "price" => 5.5, "name" => "new york sausage", "description" => "new york sausage is the best", "itemNumber" => 2
  ),
  "pineapple" => array(
    "price" => 1.5, "name" => "pineapple", "description" => "pretty gross", "itemNumber" => 3
  ),
);

$pageSelected = substr($_SERVER['REQUEST_URI'],(strrpos($_SERVER['REQUEST_URI'], "/") + 1));

?>
<ul>
  <?php foreach($pages as $key => $value) : ?>
    <a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>/<?php echo $key; ?>"><li><?php echo $value["name"]; ?></li></a>
  <?php endforeach; ?>
</ul>

<?php
$page = $pages[$pageSelected];
echo '<h1>' . $page["name"] . '</h1>';
echo '<h2>' . $page["price"] . '</h2>';
echo '<p>' . $page["description"] . '</p>';
