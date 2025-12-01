<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Body Color: body-<?php echo rand(1, 6); ?></title>
  <style>
    .body-1 {
      background-color: red;
    }

    .body-2 {
      background-color: aqua;
    }

    .body-3 {
      background-color: green;
    }

    .body-4 {
      background-color: aquamarine;
    }

    .body-5 {
      background-color: bisque;
    }

    .body-6 {
      background-color: coral;
    }
  </style>
</head>

<body class="body-<?php echo rand(1, 6); ?>">
  <?php echo "<h1>Hello from PHP!</h1>" ?>
</body>

</html>