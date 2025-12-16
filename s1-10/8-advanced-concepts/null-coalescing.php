<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Null Coalescing</title>
</head>

<body>
    <?php

    $name = @(string) ($_GET['name'] ?? '');

    $suffix = "_file";
    $input = "";

    if (is_string($input)) {
        $result = $input . $suffix;
    } else if (is_array($input)) {
        foreach ($input as $key => $value) {
            $input[$key] = $value . $suffix;
        }
        $result = $input;
    }

    var_dump($result);


    ?>
</body>

</html>