<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop</title>
</head>

<body>
    <?php

    $totalEnergyConsumption = 100000;
    $monthlyIncrease = 500;
    $efficiencyImprovement = 1 - 0.0005;
    $energyCapacityThreshold = 150000;
    $numberOfMonths = 0;

    while ($totalEnergyConsumption < $energyCapacityThreshold) {
        $totalEnergyConsumption += $monthlyIncrease;
        $monthlyIncrease *= $efficiencyImprovement;
        $numberOfMonths++;
    }

    $numberOfYears = $numberOfMonths / 12;
    echo "It will take {$numberOfMonths} months to reach or exceed the threshold of {$energyCapacityThreshold} kWh";
    if ($numberOfYears < 50) {
        echo "The energy consumption threshold of {$energyCapacityThreshold} will not be met within 50 years.";
    }

    ?>
</body>

</html>