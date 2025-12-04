<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 08</title>
</head>

<body>
    <?php

    $waitingList = [
        'Alex Reed',
        'Blake Jordan',
        'Casey Smith',
        'Drew Alex',
        'Elliot Ford',
        'Finley Harper',
        'Jordan Kay',
        'Kim Lee',
        "01 Hey",
        'Liam Park',
        'Morgan Drew'
    ];


    $priorityParticipants = [
        'Jordan Kay',
        'Sam Taylor',
        'Zane Pryor'
    ];


    $groupList = array_unique(array_merge($priorityParticipants, $waitingList));
    $finalAttendees = array_slice($groupList, 0, 5);
    sort($finalAttendees);
    $backupCandidates = array_slice($groupList, 5, 3);
    foreach ($backupCandidates as $backup) {
        echo "Hey {$backup}, we want to inform you that you are one of our backup candidates. 🥳";
    }

    // Step 1: Create remaining waiting list (not in final/backup)
    $remaining = array_values(array_diff($groupList, $finalAttendees, $backupCandidates));

    // Step 2: Check status of $individualName
    if (in_array($individualName, $finalAttendees)) {
        $individualStatus = 'Final Attendee';
    } elseif (in_array($individualName, $backupCandidates)) {
        $individualStatus = 'Backup Candidate';
    } elseif (in_array($individualName, $remaining)) {
        $position = array_search($individualName, $remaining) + 1;
        $individualStatus = "Waiting, position {$position}";
    } else {
        $individualStatus = 'Not found';
    }

    // Step 3: Output (optional)
    echo "<p>{$individualName} is {$individualStatus}</p>";
    ?>
</body>

</html>