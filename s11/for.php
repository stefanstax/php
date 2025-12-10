<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOR</title>
</head>

<body>
    <ul>

        <?php
        for ($x = 0; $x <= 250; $x++) {
            if ($x === 300) continue;
            // if ($x === 271) break;
            echo "<li>{$x}</li>";
        }

        ?>
    </ul>
</body>

</html>