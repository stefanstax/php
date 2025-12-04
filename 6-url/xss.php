<?php
function e($value)
{
  return htmlspecialchars($value, ENT_QUOTES, "UTF-8");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>XSS</title>
</head>

<body>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS</title>
  </head>

  <body>
    <h1><?php if (!empty($_POST["firstname"])) echo e($_POST["firstname"]); ?></h1>
    <?php
    if (!empty($_GET['book'])) { ?>
      <h1><?php echo $_GET['book']; ?></h1>
    <?php } ?>

    <form action="xss.php" method="POST">
      <input type="text" name="firstname" value="<?php if (!empty($_POST["firstname"])) echo e($_POST["firstname"]); ?>" />
      <input type="submit" value="Login!" />
    </form>
  </body>

  </html>