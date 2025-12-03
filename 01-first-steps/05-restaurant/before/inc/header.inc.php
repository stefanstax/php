<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./styles/custom.css" />
  <link rel="stylesheet" href="./styles/simple.css" />
  <!-- Page Title -->
  <?php if (!empty($pageTitle)): ?>
    <title>Culinary Cove &bull; <?php echo $pageTitle ?></title>
  <?php else: ?>
    <title>Culinary Cove</title>
  <?php endif; ?>
</head>

<body>
  <?php
  if (empty($pageBackground)) {
    $pageBackground = "pexels-engin-akyurt-1435904";
  }
  ?>
  <header class="header-with-background" style="background-image: url('images/<?php echo $pageBackground; ?>.jpg')">
    <h1><?php echo $pageTitle; ?></h1>
    <p>Your sanctuary for exceptional flavors</p>
    <nav>
      <?php if (!isset($pageKey)) $pageKey = ''; ?>
      <?php if ($pageKey === "our-mission"): ?>
        <a class="active" href="our-mission.php">Our Mission</a>
      <?php else : ?>
        <a href="our-mission.php">Our mission</a>
      <?php endif; ?>
      <a class="<?php if ($pageKey === "ingredients") echo "active"; ?>" href="ingredients.php">Our Ingredients</a>
      <a <?php if ($pageKey === 'menu'): ?> class="active" <?php endif; ?> href="menu.php">Our Menu</a>
    </nav>
  </header>
  <main>