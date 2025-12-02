<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays</title>
</head>

<body>
  <pre>
  <?php
  $categories = ["Programming", "Business", "Art & Design", "Consulting"];
  $categories[1] = "Business & Technology";
  $categories[99] = "Nature";
  unset($categories[3]);
  var_dump($categories);
  var_dump(isset($categories[99]));
  var_dump(empty($categories[99]));
  var_dump(count($categories));
  var_dump(count($categories));
  var_dump(in_array("Programming", $categories));
  ?>
  </pre>
</body>

</html>