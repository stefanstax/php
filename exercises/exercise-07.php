<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 07</title>
</head>

<body>
    <pre>

        <?php

        $waitingList = ['Dawn White', 'Frank Smith', 'Bob Carter', 'Charlie Davis', 'Eve Black', 'Alice Brown', 'Alice Brown', 'Charlie Davis', 'Grace Jones', 'Hank Green', 'Eve Black', 'Dawn White'];
        $removeFromList = ["Dawn White", "Charlie Davis"];

        if (isset($waitingList)) {
            // Cleanup to have unique members
            $waitingList = array_unique($waitingList);
        }

        if (isset($waitingList) && isset($removeFromList)) {
            $cleanedWaitingList = array_values(array_diff(array_unique($waitingList), $removeFromList));
            sort($cleanedWaitingList);
        }


        $selectedParticipants = array_slice($cleanedWaitingList, 0, 5);
        ?>

        <ul>
            <?php foreach ($waitingList as $guest) {
                if (in_array($guest, $selectedParticipants)) {
                    echo "<li>{$guest} ✅</li>";
                } else echo "<li>{$guest} ❌</li>";
            } ?>
        </ul>
    </pre>
</body>

</html>