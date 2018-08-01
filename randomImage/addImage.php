<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // saves a random image from the input(random) as the output file name
    // $randomNum = rand(150, 300);
    // $input = 'https://picsum.photos/' . rand(150, 300);
    // $output = 'image' . $randomNum . '.jpg';
    // file_put_contents("images/" . $output, file_get_contents($input));
    ?>
    <form action="insertImage" method="POST" enctype="multipart/form-data">
        <label>File: </label><input type="file" name="image" />
        <input type="submit" />
    </form>
  </body>
</html>
