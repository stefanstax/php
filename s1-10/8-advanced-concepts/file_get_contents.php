<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get File Contents</title>
</head>

<body>
    <?php

    // $text = file_get_contents(__DIR__ . "/inc/functions.inc.php");
    // echo $text;

    readfile(__DIR__ . "/inc/functions.inc.php");
    ?>
</body>

</html>