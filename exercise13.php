<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 13</title>
</head>

<body>
    <?php
    $campaigns = [
        'Spring Sale' => [
            'AdSet1' => [
                'name' => 'Discounted Gadgets'
            ],
            'AdSet2' => [
                'name' => 'Outdoor Equipment'
            ],
        ],
        'Holiday Deals' => [
            'AdSet1' => [
                'name' => 'Winter Apparel'
            ],
            'AdSet2' => [
                'name' => 'Electronics Special'
            ],
        ],
    ];


    foreach ($campaigns as $campaignName => $campaignChild) {
    ?>
        <p>- [<?php echo $campaignName; ?>]: <?php foreach ($campaignChild as $campaignTitle => $campaignMini) {
                                                    echo $campaignTitle;
                                                } ?> </p>
    <?php }

    ?>
</body>

</html>