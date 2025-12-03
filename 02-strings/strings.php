<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
        <?php 
            $name = "Stefan";
            $text = 'I\'m ' . $name . ' an I want to improve at my PHP skills.';
            echo $text;
            $doubleQuoted = "Hello, {$name}. Welcome to my world of PHP.";
            echo $doubleQuoted;
        ?>
    
</body>
</html>