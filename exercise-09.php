<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 09</title>
</head>

<body>

    <?php

    $hrSalaries = ['Alice' => 5000, 'Bob' => 6000, 'Charlie' => 5500];
    $salesSalaries = ['David' => 6200, 'Elena' => 4800, 'Fiona' => 5300];
    $itSalaries = ['Fiona' => 5300, 'George' => 5600, 'Hannah' => 5900, 'Ivan' => 6400];
    $allDepts = [
        "HR" => $hrSalaries,
        "Sales" => $salesSalaries,
        "IT" => $itSalaries
    ];
    $maxTotal = 0;

    $maxDept = "";

    foreach ($allDepts as $deptName => $deptSalary) {
        $totals = array_sum($deptSalary);
        var_dump($maxTotal);

        if ($totals > $maxTotal) {
            $maxTotal = $totals;
            $maxDept = $deptName;
        }
    }

    echo "Highest spending department: {$maxDept}";


    ?>

</body>

</html>