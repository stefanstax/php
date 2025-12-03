<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF</title>
</head>

<body>
    <?php
    include "vars.php";

    if ($serverStatus === 'ok') {
        echo "🟢 Welcome to our website! Browse and enjoy our content";
    } else if ($serverStatus === 'maintenance') {
        echo '🔴 We\'re currently undergoing maintenance. Please check back later.';
    } else if ($serverStatus === 'error') {
        echo '⚠️ We got a serious error. Please send us an email or call us directly.';
    } else {
        echo '⚫ We\'re currently offline fully. Please check back later.';
    }
    ?>
</body>

</html>