<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Types</title>
</head>

<body>
    <?php

    $number = 15;
    $string = "PHP";
    $isTrue = true;
    $isArray = ["12", 2];


    var_dump(is_numeric($number));
    var_dump(is_string($string));
    var_dump(is_bool($isTrue));
    var_dump(is_array($isArray));

    $entries = [
        ["title" => "The most famous band"],
        "A classical concert"
    ];

    foreach ($entries as $entry) {
        if (is_array($entry)) {
            var_dump($entry['title']);
        } else {
            var_dump($entry);
        }
    }

    if (isset($_GET['price'])) {
        $price = (int)$_GET['price'];
        // if (is_numeric($price)) {
        //     var_dump($price * 1.19);
        // } else {
        //     echo "Please provide a price using digits.";
        // }
    }

    if (isset($_GET['name'])) {
        $name = @(string)$_GET['name'];
        var_dump($name . "!!!");
    }
    ?>

    <a href="types.php?<?php echo http_build_query(['name' => ['Stefan', "Stax"]]); ?>">Link</a>
</body>

</html>