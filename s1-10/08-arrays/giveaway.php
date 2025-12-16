<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giveaway</title>
</head>

<body>

  <?php
  $names = [
    "Emily Johnson",
    "Sarah Williams",
    "Michael Smith",
    "James Brown",
    "Jennifer Davis",
    "William Miller",
  ];

  $num = count($names);
  var_dump($num);
  $choice = rand(0, $num - 1);
  var_dump($names[$choice]);
  var_dump($names[rand(0, count($names) - 1)]);
  ?>
</body>

</html>