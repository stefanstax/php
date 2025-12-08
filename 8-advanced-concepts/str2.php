<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STR 2</title>
</head>

<body>
    <?php

    require_once __DIR__ . "/inc/funcs.inc.php";

    $text = "🎠Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer feugiat scelerisque varius morbi enim nunc. Tellus in metus vulputate eu scelerisque felis imperdiet proin. Nunc sed blandit libero volutpat sed cras ornare arcu dui. Sit amet nisl suscipit adipiscing bibendum est ultricies integer quis. Amet cursus sit amet dictum sit amet justo donec enim. Neque vitae tempus quam pellentesque nec nam aliquam sem et. Mattis nunc sed blandit libero volutpat sed cras ornare. Sed adipiscing diam donec adipiscing tristique risus nec feugiat in. Lectus urna duis convallis convallis tellus id interdum velit laoreet.";
    var_dump(strlen($text));
    var_dump(strtolower($text));
    var_dump(strtoupper($text));
    var_dump(ucfirst($text));
    var_dump(trim($text));
    var_dump(strpos($text, "Lorem"))

    ?>
</body>

</html>