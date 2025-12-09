<?php

// Functions
require __DIR__ . "/inc/funcs.inc.php";

// Header
require __DIR__ . "/views/header.inc.php";

// City

$getList = file_get_contents(__DIR__ . "/data/index.json");
$data = json_decode($getList, true);
?>
<ul>
    <?php
    foreach ($data as $countryData) { ?>
        <li><b><?php echo secureText($countryData["flag"]) ?></b> <b><?php echo secureText($countryData["city"]) ?></b> located in <b><?php echo secureText($countryData["country"]) ?></b> being read from <b><?php echo $countryData["filename"] ?></b> <a href="city.php?<?php echo http_build_query(["city" => $countryData["city"]]); ?>">Visit City</a></li>
    <?php }
    ?>
</ul>

<?php

// Footer
require __DIR__ . "/views/footer.inc.php";
