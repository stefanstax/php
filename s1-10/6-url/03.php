<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dynamic URL</title>
</head>

<body>
  <?php

  var_dump($_GET);

  ?>

  <h1><?php echo $_GET['book']; ?></h1>
  <a href="03.php?<?php echo http_build_query(['book' => "Harry Potter"]); ?>">Harry Potter</a>
  <a href="03.php?<?php echo http_build_query(['book' => 'Beauty & The Beast']); ?>">Beauty & The Beast</a>
</body>

</html>