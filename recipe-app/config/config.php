<?php

$recipesData = [
    ['name' => "Citrus Salmon", 'url' => "citrus_salmon", "image" => "citrus_salmon.jpg"],
    ['name' => "Mediterranian Pasata", 'url' => "mediterranian_pasta", "image" => "mediterranian_pasta.jpg"],
    ['name' => "Sunset Risotto", 'url' => "sunset_risotto", "image" => "sunset_risotto.jpg"],
    ['name' => "Tropical Tacos", 'url' => "tropical_tacos", "image" => "tropical_tacos.jpg"]
];

class Recipe
{
    public $name;
    public $url;
    public $image;

    public function __construct($name, $url, $image)
    {
        $this->name = $name;
        $this->url = $url;
        $this->image = $image;
    }
}

foreach ($recipesData as $recipe) {
    $recipes[] = new Recipe(
        $recipe['name'],
        $recipe['url'],
        $recipe['image']
    );
}



define("ROOT_URL", "http://localhost:8000/recipe-app");