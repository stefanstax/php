<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Require</title>
</head>

<body>
    <?php
    require_once __DIR__ . "/inc/funcs.inc.php";
    $text = "PHP is Amazing";
    ?>

    <h1><?php echo cleanText($text); ?></h1>
</body>

</html>