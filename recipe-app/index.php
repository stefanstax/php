<?php

require_once __DIR__ . "/config/config.php";
$selectedRecipe = $_GET['recipe'] ?? null;
$isValidRecipe = isset($recipes[$selectedRecipe]);

if ($isValidRecipe) {
    $pageTitle = $recipes[$selectedRecipe] . "\tRecipe";
} else {
    $pageTitle = "No recipe selected";
}

include "partials/header.php";
?>


<form method="GET">
    <select name="recipe">
        <?php
        foreach ($recipes as $optionUrl => $optionName) { ?>
            <option <?= (isset($_GET['recipe']) && $_GET['recipe'] === $optionUrl ? "selected" : ""); ?> value="<?php echo $optionUrl ?>"><?php echo $optionName ?></option>
        <?php }
        ?>
    </select>
    <button type="submit">Submit</button>
</form>


<?php
include "page.php";
include "partials/footer.php"; ?>