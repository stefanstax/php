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
                'name' => 'Discounted Gadgets',
                'clicks' => 150,
                'impressions' => 10000
            ],
            'AdSet2' => [
                'name' => 'Outdoor Equipment',
                'clicks' => 250,
                'impressions' => 15000
            ],
        ],
        'Holiday Deals' => [
            'AdSet1' => [
                'name' => 'Winter Apparel',
                'clicks' => 200,
                'impressions' => 12000
            ],
            'AdSet2' => [
                'name' => 'Electronics Special',
                'clicks' => 300,
                'impressions' => 18000
            ],
        ],
    ];

    // Task 1: Total clicks and impressions per campaign
    $totalCampaignClicks = [];
    $totalCampaignImpressions = [];

    foreach ($campaigns as $campaignName => $adSets) {
        $totalCampaignClicks[$campaignName] = 0;
        $totalCampaignImpressions[$campaignName] = 0;

        foreach ($adSets as $stats) {
            $totalCampaignClicks[$campaignName] += $stats['clicks'];
            $totalCampaignImpressions[$campaignName] += $stats['impressions'];
        }
    }

    // Task 2: Global totals and averages
    $totalAllClicks = 0;
    $totalAllImpressions = 0;
    $totalAdSets = 0;

    foreach ($campaigns as $adSets) {
        $totalAdSets += count($adSets);
        foreach ($adSets as $stats) {
            $totalAllClicks += $stats['clicks'];
            $totalAllImpressions += $stats['impressions'];
        }
    }

    // Prevent division by zero
    if ($totalAdSets > 0) {
        $avgClicks = round($totalAllClicks / $totalAdSets);
        $avgImpressions = round($totalAllImpressions / $totalAdSets);
    } else {
        $avgClicks = 0;
        $avgImpressions = 0;
    }

    // Final output
    echo "Average clicks per ad set: $avgClicks, Average impressions per ad set: $avgImpressions.";

    ?>
</body>

</html>


<?php /*

        foreach ($campaignChild as $campaignInner => $campaignStats) { ?>
            <pre>
                <?php var_dump($campaignInner, $campaignStats); ?>
            </pre>
            <?php
            $clicks = [$campaignInner => $campaignStats["clicks"]];
            $impressions = [$campaignInner => $campaignStats["impressions"]];
            $totalCampaignClicks[] = $clicks;
            $totalCampaignImpressions[] = $impressions;
            ?>
    <?php }

    */ ?>