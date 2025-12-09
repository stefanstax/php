<?php
require __DIR__ . "/inc/funcs.inc.php";
require __DIR__ . "/views/header.inc.php";


$city = null;

if (!empty($_GET["city"])) {
    $city = $_GET["city"];
}

if (!empty($city)) {
    $cities = json_decode(file_get_contents(__DIR__ . "/data/index.json"), true);
    $filename = null;
    foreach ($cities as $currentCity) {
        if ($currentCity["city"] === $city) {
            $filename = $currentCity["filename"];
            break;
        }
    }

    if (!empty($filename)) {
        $data = json_decode(
            file_get_contents("compress.bzip2://" . __DIR__ . "/data/{$filename}"),
            true
        );

        var_dump($data);
    }
}


require __DIR__ . "/views/footer.inc.php";
