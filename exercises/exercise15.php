<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 15</title>
</head>

<body>
    <?php

    $totalEnergyConsumption = 50000;
    $monthlyIncrease = 200;
    $efficiencyImprovement = 0.001;
    $efficiencyImprovement = 1 - $efficiencyImprovement;
    $years = 5;

    $consumptionInMonthsLength = $years * 12;

    for ($consumptionInMonthsLength = 0; $consumptionInMonthsLength <= $years * 12; $consumptionInMonthsLength++) {
        $totalEnergyConsumption += 200;
    }
    $newEnergyConsumption = $totalEnergyConsumption * $efficiencyImprovement;
    var_dump($totalEnergyConsumption, $efficiencyImprovement, $newEnergyConsumption);

    $forecastedEnergyConsumption = (int)round($newEnergyConsumption, 2);
    var_dump($forecastedEnergyConsumption);
    ?>
</body>

</html>