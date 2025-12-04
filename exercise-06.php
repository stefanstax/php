<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 6</title>
</head>

<body>
    <pre>

    <?php
    $playlist = [];
    $songRecommendations = ["Random Four", "Random Five", "Random Six"];

    if (isset($playlist)) {
        $lastSong = end($playlist);
        echo $lastSong;
    }

    if (isset($playlist) && count($playlist) <= 3) {
        $grabRecommendedSongId = array_rand($songRecommendations);
        $randomSong = $songRecommendations[$grabRecommendedSongId];
        echo $randomSong;
        array_push($playlist, $randomSong);
    }

    // Always remove the oldest song when 11th is being added
    if (isset($playlist) && count($playlist) > 10) {
        unset($playlist[0]);
    }

    ?>
    </pre>
</body>

</html>