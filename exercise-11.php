<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 11</title>
</head>

<body>
    <?php

    $companySalaries = ['Alice' => 4000, 'Bob' => 2000, 'Charlie' => 3000];
    $averageSalary = array_sum($companySalaries) / count($companySalaries);

    foreach ($companySalaries as $employeeName => $employeeSalary) {
        if ($employeeSalary < $averageSalary) {
            $companySalaries[$employeeName] += 200;
        } elseif ($employeeSalary > $averageSalary) {
            $salaryReduceRate = 1 - 0.05;
            $companySalaries[$employeeName] *= $salaryReduceRate;
        }

        $averageSalaryAfterRevision = array_sum($companySalaries) / count($companySalaries);
        $messageToDisplay = "";
        $savings = $averageSalary - $averageSalaryAfterRevision;

        if ($savings > 0) {
            $messageToDisplay = "The net impact of the salary adjustments is a savings of \${$savings} for the company.";
        } else {
            $messageToDisplay = "The net impact of the salary adjustments is a cost increase of \${$savings}.";
        }
        echo $messageToDisplay;

    ?>
        <pre>
            <?php var_dump($companySalaries); ?>
        </pre>
    <?php }

    ?>
</body>

</html>