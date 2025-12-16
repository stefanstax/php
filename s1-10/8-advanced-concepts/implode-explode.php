<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Implode Explode</title>
</head>

<body>
    <?php

    $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer feugiat scelerisque varius morbi enim nunc. Tellus in metus vulputate eu scelerisque felis imperdiet proin. Nunc sed blandit libero volutpat sed cras ornare arcu dui. Sit amet nisl suscipit adipiscing.";

    $splitted = explode("\n", $text);

    $merge = implode("----", $splitted);
    // var_dump($merge);
    /*
     foreach ($splitted as $segment) { ?>
       <p><?php echo $segment; ?></p>
    <?php } ?>
*/


    $emailContent = "Subject: Unlock Your Potential with Us!\n\nDear Alex,\n\nWe hope this message finds you well.\n\nQuote of the Month:\n\nDr. Albert Szent-Györgyi: 'Innovation is seeing what everybody has seen and thinking what nobody has thought.'\n\nBest wishes,\nYour Discovery Network Team\nP.S. Don't miss our special announcement next month!";

    $quote = explode("Quote of the month:\n\n", $emailContent);
    $quoteParts = explode("\n\n", $quote[0]);
    $quoteOfTheMonth = trim($quoteParts[3]);
    var_dump($quoteOfTheMonth);
    $author = explode("\n\nDr.Albert Szent-Györgyi", $emailContent);
    $authorParts = explode("\n\n", $emailContent);
    $authorFinal = trim($authorParts[4]);
    var_dump($authorFinal);
    ?>
</body>

</html>