<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForEach</title>
</head>

<body>
    <pre>

        <?php

        $categories = [
            "Cyber Security",
            "Programming",
            "Design",
            "Vibe Coding",
            "Self Improvement",
            "Business",
            "Art & Drawing"
        ];

        ?>
        <ul>
            <?php foreach ($categories as $category) { ?>
                <?php
                if ($category === "Business") continue;
                if ($category === "Art & Drawing") continue;
                if ($category === "Self Improvement") break;

                ?> <li style="color: red"><?php echo $category; ?></li>

        <?php } ?>
</pre>

</body>

</html>