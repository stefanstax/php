<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $handle = opendir(__DIR__ . "/images");
    $currentFile = readdir($handle);
    $images = [];
    while (($currentFile = readdir($handle)) !== false) {
        if ($currentFile === "." || $currentFile === "..") {
            continue;
        }
        $currentFile = readdir($handle);
        $images[] = $currentFile;
    }
    closedir($handle);
    var_dump($images);
    ?>

</body>

</html>