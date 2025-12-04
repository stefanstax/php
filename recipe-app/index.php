<?php

require_once __DIR__ . "/config/config.php";
$selectedRecipe = $_GET['recipe'] ?? null;
$recipeInUse = "";

foreach ($recipes as $recipe) {
    if ($recipe->url === $selectedRecipe) {
        $recipeInUse = $recipe->name;
        break;
    }
}

if ($recipeInUse) {
    $pageTitle = $recipeInUse . "\tRecipe";
} else {
    $pageTitle = "No recipe selected";
}

include "partials/header.php";
?>


<form method="GET">
  <select name="recipe">
    <?php
        foreach ($recipes as $recipe) { ?>
    <option <?= (isset($_GET['recipe']) && $_GET['recipe'] === $recipe->url ? "selected" : ""); ?>
      value="<?php echo $recipe->url ?>"><?php echo $recipe->name ?></option>
    <?php }
        ?>
  </select>
  <button type="submit">Submit</button>
</form>


<?php
include "page.php";
include "partials/footer.php"; ?>