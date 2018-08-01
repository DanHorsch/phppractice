<?php
session_start();

// if there is a session  images array set, and it's not empty - use it
if(isset($_SESSION['imgArray']) && !empty($_SESSION['imgArray'])) {
  // set the array to the session array
  $imagesArray = $_SESSION['imgArray'];

  $imgUrl = getRandomImage($imagesArray);
}
// if the session images array isn't set or it's empty - create an array using all the images in the images folder
else {
  // scan the images directory and save the file names to an array
  $imagesArray = scandir("images");

  // remove the first two items in scaned images array - they are just foler pointers (. , ..)
  unset($imagesArray[0]);
  unset($imagesArray[1]);

  // create an empty array that will keep track of the images already shown
  $_SESSION['shownArray'] = array();

  $imgUrl = getRandomImage($imagesArray);
}

function getRandomImage($imagesArray) {
  // grab and random image
  $randImage = array_rand($imagesArray);

  // set it to a variable to use in the img src
  $randImageUrl = $imagesArray[$randImage];

  // add the image to the shown images array
  $_SESSION['shownArray'][] = $randImageUrl;

  // remove the shown image from the array;
  unset($imagesArray[$randImage]);

  //make the session array the current array with the shown image removed
  $_SESSION['imgArray'] = $imagesArray;

  // return the img src variable
  return $randImageUrl;
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Show random images</title>
  </head>
  <body>
    <h1>Refresh to get a new image</h1>
    <p>This project will give you a new random image from the images folder everytime you refresh the page, until all images have been shown. if you refresh again it will show you all the images again but in random order</p>
    <p>This is file: <?php echo $imgUrl ?></p>
    <p>There are <?php echo count($_SESSION['imgArray']); ?> new images left</p>
    <p>These are the images left:
      <?php
       foreach($_SESSION['imgArray'] as $image) {
         echo $image . ", ";
       }
      ?>
     </p>
     <p>These images have already been shown:
       <?php
        foreach($_SESSION['shownArray'] as $image) {
          echo $image . ", ";
        }
       ?>
     </p>
    <img src="images/<?php echo $imgUrl ?>" alt="">

  </body>
</html>
