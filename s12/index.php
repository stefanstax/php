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
        $allowed_extensions = ["jpg", "jpeg", "png", "svg", "webp"];
        while (($file = readdir($handle)) !== false) {
            if ($file === "." || $file === "..") continue;

            $extension = pathinfo($file, PATHINFO_EXTENSION);

            if (!in_array($extension, $allowed_extensions)) {
                continue;
            }

            $file_name = pathinfo($file, PATHINFO_FILENAME);

            if (file_exists(__DIR__ . "/images/" . $file_name . ".txt")) {
                $txt = file_get_contents(__DIR__ . "/images/" . $file_name . ".txt");
                $info = explode("\n", $txt);
            }

            $title = $info[0];
            unset($info[0]);
            $content = array_values($info);

            $images[] = [
                "image" => "/images/" . $file,
                "title" => $title,
                "content" => $content
            ];
        }
    }
    closedir($handle);
    ?>


    <?php foreach ($images as $image => $imageData) {
    ?>
        <h2><?php echo $imageData["title"] ?></h2>
        <img width="200" height="200" style="object-fit: cover;" src="<?php echo rawurlencode($imageData["image"]) ?>" alt="">
        <p><?php echo $imageData["content"] ?></p>
    <?php } ?>

</body>

</html>