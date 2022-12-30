<?php 
    declare(strict_types=1);
    include_once 'includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Galery</title>
</head>
<body>
  <form action="includes/get.inc.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">Simpan</button>
  </form>
  
</body>
</html>