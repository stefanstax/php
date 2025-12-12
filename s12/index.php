<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $imagesDirectory = __DIR__ . "/images";
    $images = [];

    if (is_dir($imagesDirectory)) {
        $handle = opendir($imagesDirectory);
        while (($file = readdir($handle)) !== false) {
            if ($file === "." || $file === "..") continue;

            $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            $isImage = in_array($extension, ["jpg", "jpeg", "png", "webp"]);

            $images[] = [
                "url" => "/images/" . $file,
                "content" => $imagesDirectory . "/" . $file
            ];
        }
    }
    closedir($handle);
    ?>


    <?php foreach ($images as $image => $imageData) {

        var_dump($imageData["content"]);
    ?>
        <!-- <img width="200" height="200" style="object-fit: cover;" src="<?php echo "/images/" . $imageData["url"] ?>" alt="">
        <p><?php readfile($imageData["content"]); ?></p> -->
    <?php } ?>

</body>

</html>