<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <?php
    $categories = array("Programming", "Design", "Business", "Marketing", "Management");
    $firstCategory = $categories[0] ?>

    <ul>
        <?php foreach ($categories as $category) { ?>
            <li><?php echo $category ?></li>
        <?php }
        ?>
    </ul>
    <?php echo $firstCategory ?>
</body>

</html>