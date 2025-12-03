<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>

<body>

  <pre>
  <?php

  var_dump($_GET);
  var_dump($_POST);
  ?>
</pre>

  <?php
  if (!empty($_GET['book'])) { ?>
  <h1><?php echo $_GET['book']; ?></h1>
  <?php } ?>

  <form action="04.php" method="POST">
    <input type="text" name="book" value="<?php if (!empty($_POST['username']))
      echo $_POST['username']; ?>" />
    <input type="password" name="password" />
    <input type="submit" value="Login!" />
  </form>

</body>

</html>