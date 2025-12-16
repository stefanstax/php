<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISSET and Empty</title>
    <style>
        h1 {
            width: 20rem;
            height: 8rem;
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <?php

    $pageTitle = "PHP is amazing!";
    // unset($pageTitle);
    // $pageTitle = '';
    var_dump(isset($pageTitle));
    var_dump(empty($pageTitle));

    if (isset($pageTitle) && $pageTitle !== '') { ?>
        <h1>
            <span><?php echo $pageTitle ?></span>
        </h1>
    <?php }

    if (!empty($pageTitle)) {
        echo "<h1>{$pageTitle}</h1>";
    }
    ?>
</body>

</html>