<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 5</title>
</head>

<body>
    <?php
    $playlist = ["Random One", "Random Two", "Random Three"];

    if (!isset($playlist) || count($playlist) === 0) {
        echo 'Your playlist needs an update. Time to discover more music!';
    }

    if (in_array("Sunny Days", $playlist)) {
        echo "You have great taste! 'Sunny Days' always lifts the mood!";
    }

    if (!in_array("Sunny Days", $playlist) && count($playlist) >= 2) {
        $playlist[1] = "Solar Whispers";
    }

    var_dump($playlist);

    ?>
</body>

</html>