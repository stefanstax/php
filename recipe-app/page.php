<?php
require_once "layout/banner.php";
function includeRecipePage($value)
{
    return include "pages/{$value}.php";
}

function getRecipeChoice($value)
{
    if (isset($_GET["recipe"])) {
        return $_GET["recipe"] === $value;
    }
}

$defaultColors = [
    "171717",
    "303030",
    "010101",
    "121212"
];


foreach ($recipes as $recipe) {
    if (getRecipeChoice($recipe->url)) {
        banner(function () use ($recipe) { ?>
<h1><?php echo $recipe->name . " Recipe"; ?></h1>
<p>I love how the citrus slices and bright colors take a simple salmon recipe and turn it into a beautiful dish.</p>
<?php }, bgImage: $recipe->image, textColor: BannerTextColor::BLACK);
        includeRecipePage($recipe->url);
    }
}