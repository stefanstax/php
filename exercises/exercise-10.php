<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 10</title>
</head>

<body>
    <?php

    $hrSalaries = ['Alice' => 5000, 'Bob' => 6000, 'Charlie' => 5500];
    $salesSalaries = ['David' => 6200, 'Elena' => 4800, 'Fiona' => 5300];
    $itSalaries = ['George' => 4800, 'Hannah' => 5900, 'Ivan' => 6400];

    $companySalaries = array_merge($hrSalaries, $salesSalaries, $itSalaries);

    // Pull lowest salaries
    $lowestSalary = min($companySalaries);
    $lowestPaidEmployees = array_keys($companySalaries, $lowestSalary);
    $lowestSalaries;
    foreach ($lowestPaidEmployees as $employee) {
        $lowestSalaries[$employee] = $lowestSalary;
    }

    var_dump($lowestSalaries);

    ?>

    <ul>
        <?php
        foreach ($companySalaries as $employeeName => $employeeSalary) { ?>
            <li><?php echo $employeeName ?> earns <?php echo "$" . $employeeSalary; ?>,00 every month.</li>
        <?php } ?>
    </ul>

</body>

</html>