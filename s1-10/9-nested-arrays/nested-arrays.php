<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested Arrays</title>
</head>

<body>
    <?php

    function safeChars($value)
    {
        return htmlspecialchars($value, ENT_QUOTES, "UTF-8");
    }

    $courses = [
        [
            "title"       => "German for Beginners",
            "flag"        => "🇩🇪",
            "description" => "Learn basic German",
            "topics"      => ["Greetings & Introductions", "Numbers & Time", "Ordering Food"]
        ],
        [
            "title"       => "French for Beginners",
            "flag"        => "🇫🇷",
            "description" => "Learn basic French",
            "topics"      => ["Basic Phrases", "Family Members", "Shopping Vocabulary"]
        ],
        [
            "title"       => "Spanish for Beginners",
            "flag"        => "🇪🇸",
            "description" => "Learn basic Spanish",
            "topics"      => ["Common Verbs", "Directions & Travel", "Daily Routines"]
        ],
        [
            "title"       => "Chinese for Beginners",
            "flag"        => "🇨🇳",
            "description" => "Learn basic Chinese",
            "topics"      => ["Numbers", "Letters", "Dialects", "Heritage", "Family Tree", "Culture"]
        ]
    ];

    foreach ($courses as $course) { ?>
        <details style="border: 1px solid black; padding: 1em; margin-bottom: 1em; border-radius: 8px; background-color: #f2f2f2; box-shadow: 4px 4px 0px black;">
            <summary><?php echo safeChars($course["flag"]) ?> <?php echo safeChars($course["title"]);   ?></summary>
            <p><?php echo safeChars($course["description"]) ?></p>
            <p>Topics</p>
            <ul>
                <?php foreach ($course["topics"] as $topics) { ?>
                    <li><?php echo $topics; ?></li>
                <?php } ?>
            </ul>
        </details>
    <?php }

    ?>
</body>

</html>