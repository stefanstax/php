<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 01</title>
</head>

<body>
    <?php
    $itemOne  = 'Vintage Lamp';
    $itemTwo = 'Antique Vase';
    $name = 'Stefan';

    $purchasedItemOne = "Thank you, {$name} for purchasing {$itemOne}. We hope it'll serve you well!";
    $purchasedItemTwo = "Thank you for purchasing {$itemTwo}, your total is $110.00";

    echo $purchasedItemOne;
    echo "<br>";
    echo $purchasedItemTwo;
    ?>
</body>

</html>